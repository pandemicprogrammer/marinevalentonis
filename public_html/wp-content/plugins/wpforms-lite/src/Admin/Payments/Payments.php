<?php

namespace WPForms\Admin\Payments;

use WPForms\Admin\Payments\Views\Overview\BulkActions;
use WPForms\Admin\Payments\Views\Single;
use WPForms\Admin\Payments\Views\Overview\Page;
use WPForms\Admin\Payments\Views\Overview\Search;

/**
 * Payments class.
 *
 * @since 1.8.2
 */
class Payments {

	/**
	 * Payments page slug.
	 *
	 * @since 1.8.2
	 *
	 * @var string
	 */
	const SLUG = 'wpforms-payments';

	/**
	 * Available views (pages).
	 *
	 * @since 1.8.2
	 *
	 * @var array
	 */
	private $views = [];

	/**
	 * The current page slug.
	 *
	 * @since 1.8.2
	 *
	 * @var string
	 */
	private $active_view_slug;

	/**
	 * The current page view.
	 *
	 * @since 1.8.2
	 *
	 * @var null|\WPForms\Admin\Payments\Views\PaymentsViewsInterface
	 */
	private $view;

	/**
	 * Initialize class.
	 *
	 * @since 1.8.2
	 */
	public function init() {

		if ( ! wpforms_is_admin_page( 'payments' ) ) {
			return;
		}

		( new ScreenOptions() )->init();
		( new Search() )->init();
		( new BulkActions() )->init();

		$this->hooks();
	}

	/**
	 * Initialize the active view.
	 *
	 * @since 1.8.2
	 */
	public function init_view() {

		$view_ids = array_keys( $this->get_views() );

		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$this->active_view_slug = isset( $_GET['view'] ) ? sanitize_key( $_GET['view'] ) : 'overview';

		// If the user tries to load an invalid view - fallback to the first available.
		if ( ! in_array( $this->active_view_slug, $view_ids, true ) ) {
			$this->active_view_slug = reset( $view_ids );
		}

		if ( ! isset( $this->views[ $this->active_view_slug ] ) ) {
			return;
		}

		$this->view = $this->views[ $this->active_view_slug ];

		$this->view->init();
	}

	/**
	 * Get available views.
	 *
	 * @since 1.8.2
	 *
	 * @return array
	 */
	private function get_views() {

		if ( ! empty( $this->views ) ) {
			return $this->views;
		}

		/**
		 * Allow to extend payment views.
		 *
		 * @since 1.8.2
		 *
		 * @param array $views Array of views where key is slug.
		 */
		$this->views = (array) apply_filters( 'wpforms_admin_payments_payments_get_views', [] );

		$this->views['overview'] = new Page();
		$this->views['single']   = new Single();

		return array_filter(
			$this->views,
			static function ( $view ) {

				return $view->current_user_can();
			}
		);
	}

	/**
	 * Register hooks.
	 *
	 * @since 1.8.2
	 */
	private function hooks() {

		add_action( 'wpforms_admin_page', [ $this, 'output' ] );
		add_action( 'current_screen', [ $this, 'init_view' ] );
		add_filter( 'wpforms_db_payments_payment_add_secondary_where_conditions_args', [ $this, 'modify_secondary_where_conditions_args' ] );
	}

	/**
	 * Output the page.
	 *
	 * @since 1.8.2
	 */
	public function output() {

		if ( empty( $this->view ) ) {
			return;
		}
		?>
		<div id="wpforms-payments" class="wrap wpforms-admin-wrap wpforms-payments-wrap wpforms-payments-wrap-<?php echo esc_attr( $this->active_view_slug ); ?>">

			<h1 class="page-title">
				<?php esc_html_e( 'Payments', 'wpforms-lite' ); ?>
				<?php $this->view->heading(); ?>
			</h1>

			<div class="wpforms-admin-content">
				<?php $this->view->display(); ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Modify arguments of secondary where clauses.
	 *
	 * @since 1.8.2
	 *
	 * @param array $args Query arguments.
	 *
	 * @return array
	 */
	public function modify_secondary_where_conditions_args( $args ) {

		// Set a current mode.
		if ( ! isset( $args['mode'] ) ) {
			$args['mode'] = Page::get_mode();
		}

		return $args;
	}
}