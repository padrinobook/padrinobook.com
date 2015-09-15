// for the latest github commits
$(function() {
    $('#github-commits').githubInfoWidget(
        { user: 'wikimatze', repo: 'padrinobook', branch: 'master', last: 5, limitMessageTo: 30 });
});


// Piwik tracking
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://padrinobook.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();


// facebook tracking

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// <script type="text/javascript">
// $(function(){
//   $('.flexslider').flexslider({
//     animation: "fade",
//     prevText: '',
//     nextText: '',
//   });
// });
// </script>
