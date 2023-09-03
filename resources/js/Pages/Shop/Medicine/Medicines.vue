<template>
    <layout title="Admin | Dashboard">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li CLASS="active">
                                        Medicines
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card-box">
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Add Medicine</button>
                                <br>
                                <medicine v-bind:permissions="medicines"></medicine>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Medicine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Medicine Name</label>
                            <input v-model="name" type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input v-model="brand" type="text" name="brand" id="brand" class="form-control" placeholder="Enter brand">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select v-model="type" name="type" id="type" class="form-control" aria-placeholder="Select type">
                                <option value="capsule">Capsule</option>
                                <option value="serup">Serup</option>
                                <option value="goods">Goods</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="type">Description</label>
                            <textarea v-model="description" class="form-control" rows="4" name="description" id="description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Preview</label>
                            <input v-on:change="handleFileUpload" type="file" name="image" class="form-control" id="image" placeholder="Enter medicine picture" >
                        </div>
                        <div class="form-group">
                            <label for="weight">Enter medicine weight (mg)</label>
                            <input v-model="weight" type="number" name="weight" id="weight" class="form-control" placeholder="Enter Weight">
                        </div>
                        <div class="form-group">
                            <label for="unitprice">Unit Price</label>
                            <input v-model="unitPrice" type="number" name="unitprice" id="unitprice" class="form-control" placeholder="Enter unit price">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input v-model="stock" type="number" name="stock" id="stock" class="form-control" placeholder="Enter stock">
                        </div>
                        <div class="form-group">
                            <label for="unitvalue">Unit value</label>
                            <input v-model="unitValue" type="number" name="unitvalue" id="unitvalue" class="form-control" placeholder="Enter unit value">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" @click="submitForm" class="btn btn-primary">Create</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
    </template>
    <script>
        import Layout from "../../inc/Layout.vue";
        import Dashboard from "../../../Mixins/Dashboard";
        import MedicineList from './MedicineList';
        export default {
            components: {Layout,medicine:MedicineList},
            mixins: [Dashboard],
            data () {
                return {
                   name:'',
                   brand:'',
                   type:'',
                   description:'',
                   image:null,
                   weight:'',
                   unitPrice:'',
                   stock:'',
                   unitValue:'' 
                }
            },
            props: {
                medicines:Object
            },
            computed: {
                //
            },
            created () {
                //
            },
            mounted () {
             
            },
            methods: {
                handleFileUpload(event){
                    const file = event.target.files[0];
                    this.image = file;
                },
                submitForm(){
                    const formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('brand', this.brand);
                    formData.append('type', this.type);
                    formData.append('description', this.description);
                    formData.append('picture', this.image);
                    formData.append('stock', this.stock);
                    formData.append('weight', this.weight);
                    formData.append('unit_price', this.unitPrice);
                    formData.append('unit_value', this.unitValue);
                    this.$inertia.post('/admins/create-medicine',formData).then(()=>{
                        this.name = '';
                        this.brand = '';
                        this.type = '';
                        this.description ='';
                        this.unitPrice ='';
                        this.unitValue ='';
                        this.stock ='';
                        this.weight ='';
                        this.image = null;
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        window.location.reload();
                    });
                }
            }
        };
    </script>
    <style scoped>
        .modal-active{
            display:block;
        }
        .red{
         border: 1px solid red;
        }
        .widget-box-one{
            height: 140px;
        }
        .selection{
            box-sizing: border-box;
            position: absolute;
            top: 15px;
            right: 70px;
        }
    
        @media screen and (max-width: 600px) {
            .selection{
                box-sizing: border-box;
                position: absolute;
                top: 60px;
                left: 20px;
                right: auto;
            }
        }
    </style>
    