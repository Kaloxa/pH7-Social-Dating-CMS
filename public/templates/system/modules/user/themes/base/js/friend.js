/*
 * Author:        Pierre-Henry Soria <ph7software@gmail.com>
 * Copyright:     (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * License:       GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 */

// Only for members
function friend(sType, iFriendId, sCSRFToken)
{
    $.post(pH7Url.base + 'user/asset/ajax/Friend', {type : sType, friendId : iFriendId, security_token : sCSRFToken}, function(oResponseData) {
        if(oResponseData.status == 1) {
            $('.msg').addClass('alert-message success');
            $('#friend_' +  iFriendId).hide('slow');
        } else {
            $('.msg').addClass('alert-message error');
        }

        $('.msg').text(oResponseData.txt).fadeOut(2000);

        window.location.reload(); // To generate a new token valid.
    }, 'json');
}