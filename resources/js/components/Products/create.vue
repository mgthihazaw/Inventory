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
                                                <a @click="addRow" class="addRow "
                                                v-hotkey="addTd">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(addTd,index) in addRows">
                                                <td>
                                                    <input class="form-control" type="text" placeholder="Serial" v-model="addTd.serial"></input>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" placeholder="Quantity" v-model="addTd.quantity"></input>
                                                </td>
                                                

                                                <td>
                                                    <select class="form-control" v-model="addTd.status">
                                                        <option value="1">Working</option>
                                                        <option value="0">Defective</option>
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
                                                <td >
                                                    
                                                    <button class="btn btn-danger btn-sm" @click.prevent="addRows.splice(index,1)" ><i class="fas fa-times"></i></button>
                                                
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary pull-right" @click="addSerial">Add Serial</button>
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
        data(){
            return {
                addRows: [],
                brands:[],
                categories:[],
                products:[],
                descriptions:[],
                manufactures:[],
                locations:[],

            }
        },
        methods:{
            addRow(){
                this.addRows.push({
                    serial: null,
                    quantity:null,
                    status: null,
                    model:null,
                    category:null,
                    description:null,
                    manufacture:null,
                    location:null,
                })
            },
            fetchModel(){
                axios.get('/api/brands')
                .then(res=> this.brands=_.map(res.data.brands,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            fetchCategory(){
                axios.get('/api/categories')
                .then(res=> this.categories=_.map(res.data.categories,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            fetchProducts(){
                axios.get('/api/products')
                .then(res=> this.products=_.map(res.data.products,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            fetchDescription(){
                axios.get('/api/descriptions')
                .then(res=> this.descriptions=_.map(res.data.descriptions,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            fetchManufacture(){
                axios.get('/api/manufactures')
                .then(res=> this.manufactures=_.map(res.data.manufactures,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            fetchLocation(){
                axios.get('/api/locations')
                .then(res=> this.locations=_.map(res.data.locations,function(data){
                    return _.pick(data,'name','id');
                }))
            },
            addSerial(){
                var addRows=_.map(this.addRows,function(num){
                    return _.pick(num,'quantity','serial','manufacture','description','location','category','model','status')
                    })

                    axios.post('/api/products',{products: addRows})
                    .then(res=>{
                        console.log(res.data)
                    })
                
            },
            deleteRow(){
                this.addRows.pop()
            }

        },
        created(){
            this.fetchProducts();
            this.fetchModel()
            this.fetchCategory()
            this.fetchDescription();
            this.fetchManufacture();
            this.fetchLocation()
        },
        computed:{
            addTd(){
                return {
                    'ctrl+enter':this.addRow,
                     'esc': this.deleteRow
                }
            },
            
            
        }
    }
</script>
