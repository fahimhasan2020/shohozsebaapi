<template>
    <layout title="User List">
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
                                        User List
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
                                <h4 class="header-title m-t-0 m-b-30">User Panel</h4>
                                <hr>
                                <users v-bind:permissions="user"></users>
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
    import Users from "./Users"
    export default {
        components: {Layout,users:Users},
        mixins: [Dashboard],
        data () {
            return {
               //
            }
        },

        props: {
            user:Object,
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
