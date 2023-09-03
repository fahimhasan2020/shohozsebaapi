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
                                        Invoices
                                    </li>
    
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
    
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </layout>
    </template>
    <script>
        import Layout from "../../inc/Layout.vue";
        import Dashboard from "../../../Mixins/Dashboard";
        export default {
            components: {Layout},
            mixins: [Dashboard],
            data () {
                return {
                    
                }
            },
            props: {
                //
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
    