<template>
  <div>
    <div class="container">
      <div class="card">
        <select id="numRunes" v-model="selectedNumRunes">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <button class="cast-button btn" @click="castRune">Cast</button>

        <div class="results-wrapper">
          <div class="runes">
            <div v-for="rune in castedRunes" :key="rune.name" class="rune">
              <div class="rune-wrapper"><template v-if="rune.name.toLowerCase() !== 'unknowable'">
                <img class="rune-image" :class="{ inverted: rune.inverted }" :src="'/wp-content/themes/zeever/assets/' + rune.name.toLowerCase() + '.png'" />
              </template>
              <div v-else style="height:8rem;"></div>
              <img class="labradorite-image" :src="labradoriteImage" />
                </div>
              
              <div class="text-output">
                <h1 class="rune-name">
                {{ rune.name }}
                <sub v-if="rune.inverted">i</sub>
              </h1>
              <div class="rune-output">
                <p v-if="rune.inverted" class="output-inverted">Inverted</p>
                <p class="output-meaning">{{ getMeaning(rune) }}</p>
              </div></div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

interface Rune {
  name: RuneName;
  inverted: boolean;
}
// Add all your rune names here
type RuneName = 'Algiz' | 'Ansuz' | 'Berkano' | 'Dagaz' | 'Ehwaz' | 'Eihwaz' | 'Fehu' | 'Gebo' | 'Hagalaz' | 'Ingwaz' | 'Isa' | 'Jera' | 'Kenaz' | 'Laguz' | 'Mannaz' | 'Nauthiz' | 'Othala' | 'Perthro' | 'Raidho' | 'Sowilo' | 'Thurisaz' | 'Tiwaz' | 'Uruz' | 'Wunjo' | 'Unknowable';

interface Runes {
  [key: string]: string[];
}

export default defineComponent({
  data() {
    return {
      selectedNumRunes: '1',
      castedRunes: [] as Rune[],
      labradoriteImage: '/wp-content/themes/zeever/assets/labradorite.png',
      runes: {
        Algiz: ['Protector, Ally, Need For Defense', 'Hidden Danger, Poor Defense, Pretense Of Power'],
        Ansuz: ['Wisdom, communication', 'Misunderstanding, manipulation'],
        Berkano: ['Birth, fertility', 'Sterility, stagnation'],
        Dagaz: ['Breakthrough, clarity', 'Confusion, lack of vision'],
        Ehwaz: ['Harmony, teamwork', 'Discord, betrayal'],
        Eihwaz: ['Endurance, defense', 'Confusion, destruction'],
        Fehu: ['Wealth, prosperity', 'Loss of wealth, failure'],
        Gebo: ['Gifts, exchange', 'Obligation, ingratitude'],
        Hagalaz: ['Disruption, change', 'Stagnation, loss of power'],
        Ingwaz: ['Potential, fertility', 'Impotence, lack of action'],
        Isa: ['Stillness, isolation', 'Boredom, loneliness'],
        Jera: ['Harvest, Reward, Plenty'],
        Kenaz: ['Knowledge, illumination', 'Ignorance, instability'],
        Laguz: ['Flow, life energy', 'Fear, lack of creativity'],
        Mannaz: ['Humanity, Social Order, Self Identity, Social Perception', 'Isolation, Selfishness, Social Schism, Self-Work'],
        Nauthiz: ['Need, resistance', 'Impatience, compulsion'],
        Othala: ['Inheritance, home', 'Loss, lack of direction'],
        Perthro: ['Mystery, chance', 'Stasis, lack of change'],
        Raidho: ['Travel, movement', 'Unexpected change, delay'],
        Sowilo: ['Energy, life force', 'Weakness, lack of energy'],
        Thurisaz: ['Force, Change Through Chaos, Sexual Tension', 'Undefended, Betrayal, Inability To Start Over'],
        Tiwaz: ['Victory, Success, Unexpected Costs, Breakthrough', 'Cost Of Success Too Great, Inability To Judge Effectively'],
        Uruz: ['Physical strength, speed', 'Weakness, inconsistency'],
        Wunjo: ['Joy, harmony', 'Sorrow, strife'],
        Unknowable: ['Cannot be known until the path is traveled']
      } as Runes
    };
  },
  methods: {
    getMeaning(rune: Rune): string {
      const meanings = this.runes[rune.name];
      const invertedIndex = rune.inverted ? 1 : 0;

      if (rune.name === 'Jera' || rune.name === 'Unknowable') {
        return meanings[0];  // these runes don't have inverted meanings
      } else {
        return meanings[invertedIndex] || meanings[0];
      }
    },
    castRune(): void {
      const numRunes = parseInt(this.selectedNumRunes, 10);
      this.castedRunes = [];
  
      const runeNames = Object.keys(this.runes) as RuneName[];
  
      for (let i = 0; i < numRunes; i++) {
        const runeName = runeNames[Math.floor(Math.random() * runeNames.length)];
        const inverted = (runeName !== 'Jera' && runeName !== 'Unknowable') ? Math.random() < 0.5 : false;
  
        this.castedRunes.push({
          name: runeName,
          inverted: inverted
        });
      }
    },
  },
});
</script>

<style scoped>
.collapse-title {
  margin-left: 5%;
}
.title {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
}

.card {
  background-color: rgb(0, 30, 38);
  padding: 20px;
  border-radius: 4px;
}

.btn {
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.output {
  font-size: 16px;
  color: white;
}
.runes {    
  border-radius: 4px;
  justify-content: space-between;
  display: flex;
  overflow: scroll;
}
.rune {
  display: flex;
  align-items: center;
  margin: 10px;
  flex-flow: column;
}

.rune-image {
  position: absolute;
  margin-right: 0.5rem;
  z-index: 100;
  width: 100px;
  height: 100px;
  filter: invert(100%);
  opacity: 90%;
  margin-left: 1rem;
}

.rune-name {
  margin-top: 1rem;
  font-size: 200%;
  text-align: center;
  color: white;
}

.inverted {
  transform: scaleX(-1);
  color: midnightblue;
}

#numRunes {
  width: 4rem;
  font-size: 1.5rem;
  text-align: center;
  font-family: sans-serif;
  color: darkslategray;
  margin-left: 5%;
}

.cast-button {
  background: #507878;
  padding: 1rem;
  font-size: 2rem;
  margin: 2rem;
  font-weight: 700;
  font-family: 'Ashfiana Regular';
}

.results-wrapper {
  display: flex;
}

.rune-output {
  padding: 1rem;
  font-size: 80%;
  height: 13rem;
  color: white;
}

.labradorite-image {
  width: 10rem;
  margin-top: -1rem;
  margin-left: -.5rem;
}

.output-inverted {
  font-style: italic;
  font-weight: bold;
  font-family: 'Fashion Fetish';
}

.output-name,
.rune-name {
  font-family: 'WishShore';
}

.output-meaning {
  font-family: 'Ashfiana Regular';
  font-size: 140%;
  margin-top: -1rem;
}
</style>
