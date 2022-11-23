/* 
 Alertify alerts
 */

$(document).ready(function () {
	"use strict";

    //basic
    $('#alertify-basic').click(function () {
        alertify.alert('Ready!');
    });


    //Multiple
    $('#alertify-multi').click(function () {
        window.showAlert = function () {
            alertify.alert('<a href="javascript:showConfirm();">Show Confirm</a>');
        };

        window.showConfirm = function () {
            alertify.confirm('<a href="javascript:showAlert();">Show Alert</a>');
        };
//works with modeless too
        alertify.alert().setting('modal', false);
        alertify.confirm().setting('modal', false);
        window.showAlert();
    });

    //licence agreements
    $('#alertify-licence-agree').click(function () {
        var pre = document.createElement('div');
//custom style.
        pre.style.maxHeight = "400px";
        pre.style.overflowWrap = "break-word";
        pre.style.margin = "-16px -16px -16px 0";
        pre.style.paddingBottom = "24px";
        pre.style.paddingTop = "24px";
        pre.appendChild(document.createTextNode($('#la').text()));
//show as confirm
        alertify.confirm(pre, function () {
            alertify.success('Accepted');
        }, function () {
            alertify.error('Declined');
        }).setting('labels', {'ok': 'Accept', 'cancel': 'Decline'});
    });
});

