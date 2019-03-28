<template>
	<div>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th 
					  v-for="key in columns"
                      @click="sortBy(key)"
                      :class="{active : sortKey == key}"
					  >
					  {{ key | capitalize }}
					  <i class="arrow" 
					  :class="sortOrders[key]>0 ? 'down' : 'up'"></i>
					</th> 
				</tr>
			</thead>
			<tbody>
				<tr v-for="entry in filterdData">
					<td v-for="key in columns">
						{{ entry[key] }}
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script type="text/javascript">
	export default{
		props:{
            data:Array,
            columns: Array,
            filterKey: String,
		},
		
		data(){

			var sortOrders = {}
			this.columns.forEach(function (key){
				sortOrders[key] = 1
			})

			return {
              sortKey : '',
              sortOrders : sortOrders
			}
		},

		computed:{
			filterdData(){
				var sortKey = this.sortKey
				
				var filterKey = this.filterKey && this.filterKey.toLowerCase()

				var order=this.sortOrders[sortKey] || 1

				var data=this.data
				if(filterKey){
					data= data.filter(function (row){
						return Object.keys(row).some(function (key){
							return String(row[key]).toLowerCase().indexOf(filterKey) > -1
						})
					})
				}
				if(sortKey){
					data = data.slice().sort(function (a,b){
						a=a[sortKey]
						b=b[sortKey]
						return (a==b ? 0 : a>b ? 1: -1) * order
					})
				}
				return data
			}
		},

		filters: {
			capitalize(str){
               return str.charAt(0).toUpperCase() + str.slice(1)
			} 
		},

		methods:{
			sortBy(key){

				this.sortKey = key
				
				this.sortOrders[key] = this.sortOrders[key] * -1
				
			}
		},
	}
</script>

<style type="text/css">
	i {
  border: solid black;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 2px;
}



.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>