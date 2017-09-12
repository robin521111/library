<template >
  <div class="container">
    <div class="col-sm-6 col-md-4" v-for="book in books">
      <div class="thumbnail">
        <img data-src="holder.js/300x300" alt="...">
        <div class="caption">
          <h3 class="text-center">{{book.title}} </h3>
        </div>
        <br>
        <p> <span class="label label-primary"> {{book.tech_field}} </span></p>
        <p> <span class="label label-primary "> </span></p>     
        <p><a class="btn btn-success" :href="'books/borrow/'+ book.id" >Purchase</a></p>
        <div v-if="auth">
         <p><a :href="'books/edit/'+ book.id" class="btn btn-info" role="button">Edit</a>
          <a :href="'books/delete/'+  book.id " class="btn btn-info" role="button">Delete</a>
        </p>
      </div>


      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" :style="{width:book.progress + '%'}" >
          {{book.progress}}%
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<script>
  export default {
    mounted() {
     console.log('Component be mounted!')
   },
   props:{
    books: Array,
    auth: Object,
  }, 

}
</script>
