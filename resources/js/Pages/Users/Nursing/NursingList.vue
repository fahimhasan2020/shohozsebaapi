<template>
    <layout title="Nursing List">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li CLASS="active">
                                        Nursing List
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Nursing Panel</h4>
                                <hr>
                                <nurs v-bind:permissions="nurs"></nurs>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </layout>
</template>
<script>
    import Layout from "../../inc/Layout";
    import Dashboard from "../../../Mixins/Dashboard";
    import Nurs from "./Nurs"
    export default {
        components: {Layout,nurs:Nurs},
        mixins: [Dashboard],
        data () {
            return {
               //
            }
        },

        props: {
            nurs:Object,
        },
        computed: {
          //
        },
        created () {
            //
        },
        mounted () {
           //
        },
                methods: {
                    //
        }
    };
</script>
