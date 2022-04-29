<template>
  <div class="mt-2">
    <form class="mt-3">
      <div class="d-flex">
        <div class="input-group mr-2">
          <span class="icon"><i class="bi bi-search"></i></span>
          <input
            type="text"
            name="search-brand"
            class="form-control px-2"
            id="search-brand"
            aria-describedby="Nombre de la marca"
            placeholder="Nombre de la marca"
            required
            autofocus
          />
        </div>
        <button type="submit" class="button button-light w-50 mx-4">
          Buscar
        </button>
      </div>
    </form>
  </div>
</template>
