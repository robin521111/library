<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        this is fast testing ~!! {{card}}

                        <br>
                        
                        
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
        props:['message','card']
        }
    
</script>
