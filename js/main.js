// for the latest github commits
// $(function() {
//     $('#github-commits').githubInfoWidget(
//         { user: 'padrinobook', repo: 'padrinobook', branch: 'master', last: 5, limitMessageTo: 30 });
// });

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

