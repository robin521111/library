<template >
<div class="container">

    <div class="col-sm-6 col-md-4" v-for="book in books">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="...">
      <div class="caption">
       <div id="BookCard">
       </div>
        <h3>{{book.title}}</h3>
        <p> <span class="label label-primary"> </span></p>     
   <p><button type="button" class="btn btn-success">Purchase</button></p>
   <div v-if="auth">
       <p><a :href="'books/edit/'+ book.id" class="btn btn-info" role="button">Edit</a>
<a :href="'books/delete/'+  book.id " class="btn btn-info" role="button">Delete</a>
        </p>
   </div>
   <p> <span class="label label-primary"> {{book.tech_field}} </span></p>
   <p> <span class="label label-primary"> {{book.progress}} </span></p>


   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" :style={width}" >
  </div>
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
        data:function () {
         return {width:book.progress};
        }

    }
</script>
