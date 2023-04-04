<template>
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Navigation</li>
                    <li>
                        <a href="/" class="waves-effect" ><i class="mdi mdi-home"></i>&nbsp;<span>Home</span></a>
                    </li><!-------------Home-------------------------->
                    <li class="has_sub">
                        <inertia-link href="/admins/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </inertia-link>
                    </li><!---------Dashboard--------->
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi  mdi-contact-mail"></i> <span> Mails </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><inertia-link href="/admins/mail">Mail</inertia-link></li>
                            <li><inertia-link href="/admins/email/support">Support</inertia-link></li>
                            <li><inertia-link href="/admins/email/contact">Contacts</inertia-link></li>
                        </ul>
                    </li><!---------mailbox----------->
                    <li v-if="roles.includes('developper') || roles.includes('superadmin') || roles.includes('admin')" @click="subToggle('user')" class="has_sub">
                        <a href="javascript:void(0);" :class="['waves-effect',userView]"><i class="mdi mdi-account"></i> <span> User </span> <span class="menu-arrow"></span></a>
                        <ul :class="['list-unstyled',userBlock]"">
                            <li v-if="roles.includes('developper') || roles.includes('superadmin')"><inertia-link href="/admins/admin">Admin</inertia-link></li>
                            <li v-if="roles.includes('developper') || roles.includes('superadmin') || roles.includes('admin')" ><inertia-link href="/admins/user">User</inertia-link></li>
                            <li v-if="roles.includes('developper') || roles.includes('superadmin') || roles.includes('admin')" ><inertia-link href="/admins/nurse">Nurs</inertia-link></li>
                        </ul>
                    </li><!----------Users------------>


                    <li class="menu-title">SHOP</li>
                        <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-share"></i><span>E-COMMERCE</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);">Orders</a></li>
                            <li><a href="javascript:void(0);">Vendors</a></li>
                            <li><a href="javascript:void(0);">Products</a></li>
                            <li><a href="javascript:void(0);">Categories</a></li>
                            <li><a href="javascript:void(0);">Settings</a></li>
                        </ul>
                    </li><!---------Social site----------->

                     <li class="menu-title">PUSH NOTIFICATIONS</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-share"></i><span>Mass Marketing</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);">USER TOKENS</a></li>
                            <li><a href="javascript:void(0);">NOTIFICATION QUEUES</a></li>
                            <li><a href="javascript:void(0);">RANDOM NOTIFICATFIONS</a></li>
                            <li><a href="javascript:void(0);">CATEGORIES</a></li>
                            <li><a href="javascript:void(0);">Settings</a></li>
                        </ul>
                    </li><!---------Social site----------->

                    <li class="menu-title">Marketing</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-share"></i><span> Social site </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);">Social Media</a></li>
                            <li><a href="javascript:void(0);">You tube</a></li>
                            <li><a href="javascript:void(0);">Blogs Sharing</a></li>
                        </ul>
                    </li><!---------Social site----------->
                </ul>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
            <div class="help-box">
                <h5 class="text-muted m-t-0">For Help ?</h5>
                <p class=""><span class="text-custom">Email:</span> <br/> fahimhasan2020@gmail.com</p>
                <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+880) 171 143 2259</p>
            </div>
        </div>
        <!-- Sidebar -left -->
    </div>
</template>
<script>
    export default {
        components: {},
        data () {
            return {
                roles : [],
                userView:'',
                userBlock:''

            }
        },
        props: {
            
        },
        computed: {
            //
        },
        created () {
            //
        },
        mounted () {
           this.$page.auth.user.roles.map((item)=>{
            this.roles.push(item.slug);
           });
        },
        methods: {
           subToggle(value){
            if(value === 'user' & this.userView === ''){
                this.userView = 'subdrop';
                this.userBlock = 'blocka';
            }else if(value === 'user' & this.userView !== ''){
                this.userView = '';
                this.userBlock = '';
            }
           }
        }
    };
</script>
<style scoped>
.blocka{
    display: block !important;
}
</style>
