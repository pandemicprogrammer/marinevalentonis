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
              <template v-if="rune.name.toLowerCase() !== 'unknowable'">
                <img class="rune-image" :class="{ inverted: rune.inverted }" :src="'/wp-content/themes/zeever/assets/' + rune.name.toLowerCase() + '.png'" />
              </template>
              <div v-else style="height:8rem;"></div>
               <img class="labradorite-image" :src="labradoriteImage" />
              <h1 class="rune-name">
                {{ rune.name }}
                <sub v-if="rune.inverted">i</sub>
              </h1>
            </div>
          </div>
          <div v-html="output" class="output"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import type { Ref } from 'vue';

interface Rune {
  name: string;
  inverted: boolean;
  
}

const runes: Record<string, string[]> = {
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
  Jera: ['Harvest, Reward, Plenty', ''],
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
  Unknowable: ['That which cannot be known until the path is traveled.', '']
};

const runeRelations: Map<string[], string> = new Map([
  [['Fehu', 'Uruz'], 'Wealth and strength can coexist.'],
  [['Uruz', 'Thurisaz'], 'Strong forces might lead to chaos.'],
  [['Thurisaz', 'Ansuz'], 'Chaotic forces may disrupt communication.'],
  [['Ansuz', 'Raidho'], 'Communication can aid in travel or change.'],
  [['Raidho', 'Kenaz'], 'Travel or movement may lead to new knowledge.'],
  [['Kenaz', 'Gebo'], 'Knowledge is a gift.'],
  [['Gebo', 'Wunjo'], 'Gifts may bring joy.'],
  [['Wunjo', 'Hagalaz'], 'Even in joy, be aware of potential disruptions.'],
  [['Hagalaz', 'Nauthiz'], 'Disruptions may lead to need or resistance.'],
  [['Nauthiz', 'Isa'], 'Resistance can lead to stagnation or isolation.'],
  [['Isa', 'Jera'], 'Stagnation might prevent harvest or reward.'],
  [['Jera', 'Eihwaz'], 'Rewards require endurance.'],
  [['Eihwaz', 'Perthro'], 'Endurance can lead to unknown outcomes.'],
  [['Perthro', 'Algiz'], 'Mystery and protection can go hand in hand.'],
  [['Algiz', 'Sowilo'], 'Protection can lead to vital energy or life force.'],
  [['Sowilo', 'Tiwaz'], 'Life energy may require justice or sacrifice.'],
  [['Tiwaz', 'Berkano'], 'Justice may result in new beginnings or growth.'],
  [['Berkano', 'Ehwaz'], 'Growth and harmony often go together.'],
  [['Ehwaz', 'Mannaz'], 'Harmony can enhance social connections and humanity.'],
  [['Mannaz', 'Laguz'], 'Social harmony can stimulate creative flow.'],
  [['Laguz', 'Ingwaz'], 'Creative flow may lead to potential and fertility.'],
  [['Ingwaz', 'Dagaz'], 'Fertility can result in breakthroughs and clarity.'],
  [['Dagaz', 'Othala'], 'Look to heritage & home for clarity.']
]);

export default defineComponent({
 
  data() {
    return {
      selectedNumRunes: '1',
      output: '',
      castedRunes: [] as Rune[],
      labradoriteImage: '/wp-content/themes/zeever/assets/labradorite.png',

    };
  },
  methods: {
    castRune(): void {
      const numRunes = parseInt(this.selectedNumRunes, 10);
      this.castedRunes = [];

      let output = '';
      const relationFound = new Set<string>();

      for (let i = 0; i < numRunes; i++) {
        const rune = Object.keys(runes)[Math.floor(Math.random() * Object.keys(runes).length)];

        const meanings = runes[rune];
        const inverted = Math.round(Math.random());
        const meaning = meanings[inverted];
        const runeObject: Rune = {
          name: rune,
          inverted: inverted === 1,
        };
        this.castedRunes.push(runeObject);

        const runeOutput = `
          <div class="rune-wrapper">
            <div class="rune-output">
              <h1 class="output-name">${rune}</h1> 
              ${runeObject.inverted ? '<p class="output-inverted">inverted</p>' : ''}
              <br>
              <p class="output-meaning">${meaning}</p>
            </div>
          </div>
        `;
        output += runeOutput;
      }

      for (let i = 0; i < this.castedRunes.length; i++) {
        for (let j = i + 1; j < this.castedRunes.length; j++) {
          const relationPair = [this.castedRunes[i].name, this.castedRunes[j].name];
          relationPair.sort();
          const relation = runeRelations.get(relationPair);
          if (relation) {
            relationFound.add(relationPair.join('-'));
          }
        }
      }

      relationFound.forEach((relationPair) => {
        const relation = runeRelations.get([relationPair]); // Wrap relationPair in an array
        output += `Relation: ${relationPair}: ${relation}<br><br>`;
      });


      this.output = output;
    }
  }
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
  margin-top: 20px;
  font-size: 16px;
  color: white;
}
.runes {    
  border-radius: 4px;
  justify-content: center;
  margin-top: 20px;
}

.rune {
  scale: 85%;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 10px;
}

.rune-image {
  margin-top: 2rem;
  margin-right: 0.5rem;
  z-index: 100;
  width: 100px;
  height: 100px;
  filter: invert(100%);
  opacity: 90%;
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
  position: absolute;
  width: 13rem;
  margin-top: -1rem;
  margin-left: -1rem;
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
