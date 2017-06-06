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
       <p><a :href="'books/edit/'+  book.id" class="btn btn-info" role="button">Edit</a>
<a :href="'books/delete/'+  book.id " class="btn btn-info" role="button">Delete</a>
        </p>
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
            
        }
    }
</script>
