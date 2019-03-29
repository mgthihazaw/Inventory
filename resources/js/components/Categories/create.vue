<template>
    <div class="container">
        <div class="row ">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                    </div>

                    <div class="panel-body">
                        <section class="panel">
                            <div class="panel">
                                <div class="panel panel-footer">
                                    <header class="panel panel-default">
                                        <h3>Create Tech Item</h3>
                                    </header>
                                    
                                </div>
                                <div class="panel panel-footer">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Serial</th>
                                            <th>Status</th>
                                            <th>Model</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Manufacture</th>
                                            <th>Location</th>
                                            <th class="text-center">
                                                <a @click="addRow" class="addRow">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </a>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(addTd,index) in addRows">
                                                <td>
                                                    <input class="form-control" type="text" placeholder="Serial"></input>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.status">
                                                        <option value="1">Working</option>
                                                        <option value="0">Working</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.model">
                                                        <option v-for="option in brands" :value="option.id">{{option.name}}</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.category">
                                                        <option v-for="option in categories" :value="option.id">{{option.name}}</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.description">
                                                        <option v-for="option in descriptions" :value="option.id">{{option.name}}</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.manufacture">
                                                        <option v-for="option in manufactures" :value="option.id">{{option.name}}</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" v-model="addTd.location">
                                                        <option v-for="option in locations" :value="option.id">{{option.name}}</option>
                                                        
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
