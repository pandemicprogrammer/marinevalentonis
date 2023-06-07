<template>
  <div class="container">
    <h1 class="title">Rune Casting</h1>
    <div class="card">
      <label for="numRunes">Number of Runes:</label>
      <select id="numRunes" v-model="selectedNumRunes">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <button class="btn" @click="castRune">Cast Rune</button>
      <div v-html="output" class="output"></div>
      <div class="runes">
       <div v-for="rune in castedRunes" :key="rune" class="rune">
        <div class="rune-image" :style="{ backgroundImage: `url(${getRuneImageUrl(rune)})` }"></div>
        <div class="rune-name">{{ rune }}</div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import RuneIcon from './RuneIcon.vue';
// Dictionary of Runes, Meanings, and Inverted Meanings
const runes = {
  Fehu: ['Wealth, prosperity', 'Loss of wealth, failure'],
  Uruz: ['Physical strength, speed', 'Weakness, inconsistency'],
  Thurisaz: ['Force, chaos', 'Destruction, defenselessness'],
  Ansuz: ['Wisdom, communication', 'Misunderstanding, manipulation'],
  Raidho: ['Travel, movement', 'Unexpected change, delay'],
  Kenaz: ['Knowledge, illumination', 'Ignorance, instability'],
  Gebo: ['Gifts, exchange', 'Obligation, ingratitude'],
  Wunjo: ['Joy, harmony', 'Sorrow, strife'],
  Hagalaz: ['Disruption, change', 'Stagnation, loss of power'],
  Nauthiz: ['Need, resistance', 'Impatience, compulsion'],
  Isa: ['Stillness, isolation', 'Boredom, loneliness'],
  Jera: ['Harvest, reward', 'Indolence, missed opportunity'],
  Eihwaz: ['Endurance, defense', 'Confusion, destruction'],
  Perthro: ['Mystery, chance', 'Stasis, lack of change'],
  Algiz: ['Protection, growth', 'Hidden danger, loss of shield'],
  Sowilo: ['Energy, life force', 'Weakness, lack of energy'],
  Tiwaz: ['Justice, sacrifice', 'Injustice, lack of conviction'],
  Berkano: ['Birth, fertility', 'Sterility, stagnation'],
  Ehwaz: ['Harmony, teamwork', 'Discord, betrayal'],
  Mannaz: ['Humanity, social order', 'Isolation, selfishness'],
  Laguz: ['Flow, life energy', 'Fear, lack of creativity'],
  Ingwaz: ['Potential, fertility', 'Impotence, lack of action'],
  Dagaz: ['Breakthrough, clarity', 'Confusion, lack of vision'],
  Othala: ['Inheritance, home', 'Loss, lack of direction']
};

// Dictionary of some basic rune relations for demonstration
const runeRelations = new Map([
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
  [['Dagaz', 'Othala'], 'Clarity can aid in understanding your heritage or home.']
]);

export default {
  data() {
    return {
      selectedNumRunes: '1',
      output: '',
      castedRunes: []
    };
    },
  
  methods: {
   async getRuneImageUrl(rune) {
    const imageName = `${rune.toLowerCase()}.png`;
    const module = await import(`./assets/images/runes/${imageName}`);
    return module.default;
},
    castRune() {
  const numRunes = parseInt(this.selectedNumRunes, 10); // Convert selectedNumRunes to an integer

  this.castedRunes = []; // Reset the castedRunes array

  let output = '';
  const relationFound = new Set(); // Track which rune relations have been found in the current cast

  for (let i = 0; i < numRunes; i++) {
    const rune = Object.keys(runes)[Math.floor(Math.random() * Object.keys(runes).length)];
    const meanings = runes[rune];
    const inverted = Math.round(Math.random());
    const meaning = meanings[inverted];
    this.castedRunes.push(rune);

    if (inverted) {
      output += `Rune: ${rune} (inverted)<br>Meaning: ${meaning}<br><br>`;
    } else {
      output += `Rune: ${rune}<br>Meaning: ${meaning}<br><br>`;
    }
  }

  for (let i = 0; i < this.castedRunes.length; i++) {
    for (let j = i + 1; j < this.castedRunes.length; j++) {
      const relationPair = [this.castedRunes[i], this.castedRunes[j]];
      relationPair.sort();
      const relation = runeRelations.get(relationPair);
      if (relation) {
        relationFound.add(relationPair.join('-'));
      }
    }
  }

  relationFound.forEach((relationPair) => {
    const relation = runeRelations.get(relationPair);
    output += `Relation: ${relationPair}: ${relation}<br><br>`;
  });

  this.output = output;
}

  }
};
</script>


<style>
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.title {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
}

.card {
  background-color: #f7f7f7;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.btn {
  background-color: #4caf50;
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
  color: darkgray;
}
.runes {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.rune {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 10px;
}

.rune-image {
  width: 100px;
  height: 100px;
}

.rune-name {
  margin-top: 5px;
  font-size: 12px;
  text-align: center;
  color: darkslategray;
}

</style>
