define ("theme_snap/login_render-lazy",["jquery"],function(a){'use strict';var b={enabledLoginOptions:[]};b.enabledLoginOptions.ENABLED_LOGIN_BOTH="0";b.enabledLoginOptions.ENABLED_LOGIN_MOODLE="1";b.enabledLoginOptions.ENABLED_LOGIN_ALTERNATIVE="2";b.enabledLoginOrder=[];b.enabledLoginOrder.ORDER_LOGIN_MOODLE_FIRST="0";b.enabledLoginOrder.ORDER_LOGIN_ALTERNATIVE_FIRST="1";return{loginRender:function loginRender(c,d){(function show(c,d,e){switch(c){case b.enabledLoginOptions.ENABLED_LOGIN_MOODLE:a(".snap-login-option").show();a("#alt-login").hide();e();break;case b.enabledLoginOptions.ENABLED_LOGIN_ALTERNATIVE:a(".snap-login-option").show();a("#base-login").hide();e();break;default:a(".snap-login-option").show();if(d==b.enabledLoginOrder.ORDER_LOGIN_ALTERNATIVE_FIRST){a("#base-login").remove().insertAfter(a("#alt-login"))}e();}})(c,d,function(){a(".snap-log-in-more").hide();a(".snap-log-in-more").css("visibility","hidden")})}}});
