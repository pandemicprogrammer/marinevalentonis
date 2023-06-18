<template>
  <div class="herb-finder">
    <h1 class="title">Herb/Mushroom Finder</h1>
    <div class="input-section">
      <h2>Symptoms</h2>
      <div v-for="(symptom, index) in symptoms" :key="index" class="input-row">
        <select v-model="symptom.value" class="input-field">
          <option disabled value="">Please select a symptom</option>
          <option v-for="option in symptomOptions" :key="option" :value="option" :disabled="symptoms.length >= 3">
            {{ option }}
          </option>
        </select>
        <button @click="removeSymptom(index)" class="remove-button">Remove</button>
      </div>
      <button @click="addSymptom" class="add-button" :disabled="symptoms.length >= 3">Add Symptom</button>
    </div>
    <div class="input-section">
      <h2>Desired Effects</h2>
      <div v-for="(effect, index) in effects" :key="index" class="input-row">
        <select v-model="effect.value" class="input-field">
          <option disabled value="">Please select an effect</option>
          <option v-for="option in effectOptions" :key="option" :value="option" :disabled="effects.length >= 3">
            {{ option }}
          </option>
        </select>
        <button @click="removeEffect(index)" class="remove-button">Remove</button>
      </div>
      <button @click="addEffect" class="add-button" :disabled="effects.length >= 3">Add Effect</button>
    </div>
    <button @click="findHerbs" class="find-button">Find Herbs/Mushrooms</button>
    <ul v-if="foundHerbs.length" class="herb-list">
      <li v-for="herb in foundHerbs" :key="herb.name" class="herb-item">
        <strong>{{ herb.name }}</strong> - {{ herb.uses }}
      </li>
    </ul>
    <div v-else class="empty-message">No herbs/mushrooms found.</div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

interface Symptom {
  value: string;
}

interface Effect {
  value: string;
}

interface Herb {
  name: string;
  uses: string;
}

export default defineComponent({
  data() {
    return {
      symptoms: [{ value: "" }] as Symptom[],
      effects: [{ value: "" }] as Effect[],
      foundHerbs: [] as Herb[],
      herbalLibrary: [
        { name: "Herb 1", uses: "Use for symptom 1 and effect 1" },
        { name: "Herb 2", uses: "Use for symptom 2 and effect 2" },
        { name: "Herb 3", uses: "Use for symptom 3 and effect 3" },
        { name: "Mushroom 1", uses: "Use for symptom 4 and effect 4" },
        { name: "Mushroom 2", uses: "Use for symptom 5 and effect 5" },
      ] as Herb[],
      symptomOptions: [
        'Symptom 1', 'Symptom 2', 'Symptom 3', 'Symptom 4', 'Symptom 5'
        // Add your options here
      ] as string[],
      effectOptions: [
        'Effect 1', 'Effect 2', 'Effect 3', 'Effect 4', 'Effect 5'
        // Add your options here
      ] as string[],
    };
  },
  methods: {
    addSymptom() {
      if (this.symptoms.length < 3) {
        this.symptoms.push({ value: "" });
      }
    },
    removeSymptom(index: number) {
      this.symptoms.splice(index, 1);
    },
    addEffect() {
      if (this.effects.length < 3) {
        this.effects.push({ value: "" });
      }
    },
    removeEffect(index: number) {
      this.effects.splice(index, 1);
    },
    findHerbs() {
      this.foundHerbs = this.herbalLibrary.filter((herb) =>
        this.matchesCriteria(herb)
      );
    },
    matchesCriteria(herb: Herb) {
      const symptomMatches = this.symptoms.every((symptom) =>
        herb.uses.toLowerCase().includes(symptom.value.toLowerCase())
      );
      const effectMatches = this.effects.every((effect) =>
        herb.uses.toLowerCase().includes(effect.value.toLowerCase())
      );
      return symptomMatches && effectMatches;
    },
  },
});
</script>

<style scoped>
.herb-finder {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 4px;
}

.title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.input-section {
  margin-bottom: 20px;
}

h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

.input-row {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.input-field {
  flex: 1;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
}

.remove-button {
  margin-left: 10px;
  padding: 6px 12px;
  background-color: #ccc;
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
}

.add-button {
  padding: 6px 12px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
}

.find-button {
  display: block;
  margin: 0 auto;
  padding: 6px 12px;
  background-color: #28a745;
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
}

.herb-list {
  margin-top: 20px;
  padding-left: 0;
  list-style-type: none;
}

.herb-item {
  margin-bottom: 5px;
}

.empty-message {
  text-align: center;
  font-size: 16px;
}
.page-view-wrapper {
  background-color: rgba(255, 255, 255, 0.5); /* Background color with opacity */
}
</style>
