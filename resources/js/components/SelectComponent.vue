<template>
  <div class="mt-2">
    <select v-model="selected">
      <option disabled value="">{{ title }}</option>
      <option v-for="(option, index) in options" :value="option" :key="index">
        {{ option }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selected: "",
    };
  },

  props: ["title", "options"],
  mounted() {
    console.log(this.options);
  },
};
</script>
