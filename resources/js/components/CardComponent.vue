<template>
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="card-container">
        <div
          class="col-4 col-lg-12 card mx-2 px-4"
          v-for="item in data"
          :key="item.id"
        >
          <img :src="item.img" alt="" />
          <span class="mt-2">{{ item.text }}</span>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      data: [
        { id: 1, text: "Compara precios", img: "images/compara-precios.png" },
        {
          id: 2,
          text: "Guarda lista de productos",
          img: "images/lista-productos.png",
        },
        {
          id: 3,
          text: "Farmacia más cercana",
          img: "images/farmacia-cercana.png",
        },
        { id: 4, text: "Consulta stock", img: "images/consulta-stock.png" },
      ],
    };
  },
};
</script>

<style scoped>
.card {
  width: 120px;
  text-align: center;
  font-size: 10px;
  min-height: 150px;
  justify-content: center;
}
.card > img {
  width: 80px;
}
</style>
