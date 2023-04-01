<template>
    <layout title="Admin | Account settings">
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
                                        Account settings
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="text-center text-primary">Blog settings</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="for-group">
                                            <label>Youtube Link</label>
                                            <input type="text" v-model="youtube" class="form-control mb-lg" placeholder="Youtube Link" />
                                        </div>
                                        <div class="for-group">
                                            <label>whatsapp Link</label>
                                            <input type="text" v-model="whatsapp" class="form-control mb-lg" placeholder="Whatsapp link" />
                                        </div>
                                        <div class="for-group">
                                            <label>Messanger Link</label>
                                            <input type="text" v-model="messanger" class="form-control mb-lg" placeholder="Messanger Link" />
                                        </div>
                                        <div class="for-group">
                                            <label>Imo Link</label>
                                            <input type="text" v-model="imo" class="form-control mb-lg" placeholder="imo Link Link" />
                                        </div>
                                        <button @click="updateSocial" class="btn btn-block btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="text-center text-primary">Social settings</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="for-group">
                                            <label>Facebook Link</label>
                                            <input type="text" v-model="facebookLink" class="form-control mb-lg" placeholder="Facebook Link" />
                                        </div>
                                        <div class="for-group">
                                            <label>Twitter Link</label>
                                            <input type="text" v-model="twitterLink" class="form-control mb-lg" placeholder="Twitter Link" />
                                        </div>
                                        <div class="for-group">
                                            <label>Instagram Link</label>
                                            <input type="text" v-model="instagramLink" class="form-control mb-lg" placeholder="Instagram Link" />
                                        </div>
                                        <div class="for-group">
                                            <label>Linkedin Link</label>
                                            <input type="text" v-model="linkedinLink" class="form-control mb-lg" placeholder="Linkedin Link Link" />
                                        </div>
                                        <button @click="updateSocial" class="btn btn-block btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="text-center text-primary">Account Settings</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">Delete my account</div>
                                            <div class="col-md-4"><a href="javascript:void(0)">Delete account</a></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;padding-bottom: 15px;padding-top: 15px">
                                        <div class="row">
                                            <div class="col-md-8">Deactivate my account</div>
                                            <div class="col-md-4"><inertia-link href="javascript:void(0)" @click.prevent="deactivate" >Deactivate account</inertia-link></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;padding-bottom: 15px;padding-top: 15px">
                                        <div class="row">
                                            <div class="col-md-8">Help & info</div>
                                            <div class="col-md-4"><a href="javascript:void(0)">Account Info</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;padding-bottom: 15px;padding-top: 15px">
                                        <div class="row">
                                            <div class="col-md-8">Support</div>
                                            <div class="col-md-4"><a href="javascript:void(0)">Account support</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="padding-bottom: 15px;padding-top: 15px">
                                        <div class="row">
                                            <div class="col-md-8">Trusted browser</div>
                                            <div class="col-md-4">
                                                <inertia-link v-if="$page.auth.user.browser === '0'" @click.prevent="enableTrustedBrowser('enable')" href="javascript:void(0)">Enable</inertia-link>
                                                <inertia-link  v-else @click.prevent="enableTrustedBrowser('disable')" href="javascript:void(0)">Disable</inertia-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="text-center text-primary">Recent activities</h4>
                                <div class="form-group">
                                            <label>phone number</label>
                                            <input type="text" v-model="phone" class="form-control mb-lg" placeholder="phone number" />
                                        </div>
                                        <div class="form-group">
                                            <label>Agora Token</label>
                                            <input type="text" v-model="agora_token" class="form-control mb-lg" placeholder="Agora token" />
                                        </div>
                                        <div class="form-group">
                                            <label>Support mail</label>
                                            <input type="text" v-model="email" class="form-control mb-lg" placeholder="Support mail" />
                                        </div>
                                        <button @click="updateSocial" class="btn btn-block btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>

                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </layout>
</template>
<script>
    import Layout from "../inc/Layout";
    import Dashboard from "../../Mixins/Dashboard";
    export default {
        components: {Layout},
        mixins: [Dashboard],
        data () {
            return {
                facebookLink:'',
                instagramLink:'',
                twitterLink:'',
                linkedInLink:'',
                email:'',
                phone:'',
                youtube:'',
                whatsapp:'',
                messanger:'',
                imo:'',
                agora_token:''
            }
        },
        props: {
          configs:Object
        },
        computed: {
            //
        },
        created () {
            //
        },
        mounted () {
            this.facebookLink = this.configs.facebook;
            this.twitterLink = this.configs.twitter;
            this.instagramLink = this.configs.insragram;
            this.linkedinLink = this.configs.linkedin;
            this.email = this.configs.email;
            this.phone = this.configs.phone_number;
            this.youtube = this.configs.youtube;
            this.imo = this.configs.imo;
            this.messanger = this.configs.messanger;
            this.whatsapp = this.configs.whatsapp;
            this.agora_token = this.configs.agora_token;
        },
        methods: {
           updateSocial(){
            this.$inertia.post('/admins/account/social/update',{facebook:this.facebookLink,twitter:this.twitterLink,instagram:this.instagramLink,phone_number:this.phone,email:this.email,youtube:this.youtube,agora_token:this.agora_token,imo:this.imo,whatsapp:this.whatsapp,messanger:this.messanger,linkedin:this.linkedinLink}).then(()=>{

            });
           },
           enableTrustedBrowser(data){
               if (data === 'enable'){
                   this.$inertia.post('/admins/enable/trusted/browser/enable');
               }else if(data === 'disable'){
                   this.$inertia.post('/admins/enable/trusted/browser/disable');
               }

           },
            deactivate(){
                this.$confirm("If you deactivate account , other admins can not message you or view your profile. You can reactivate by login again","Warning","warning").then(() => {
                    this.$inertia.post('/admins/account/deactivate')
                });

            }
        }
    };
</script>
<style scoped>
    .acts{
        background-color: #f2f6f6;
        padding-bottom: 15px;
        padding-top: 15px;
        margin-bottom: 10px;
        box-shadow: 2px 2px 2px 2px #eee;
    }
    .mb-lg{
        margin-bottom: 10px;
    }
</style>
