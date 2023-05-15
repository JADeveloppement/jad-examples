import $ from 'jquery'

setTimeout(() => {
    $(".waiting").removeClass("opacity-0").addClass("opacity-1");
    $(".loading > img, .loading > p ").addClass("animate-pulse");
}, 3000);

var embed = new Twitch.Embed("twitch-embed", {
    width: 854,
    height: 480,
    channel: "bobtighttea",
    muted: "bite",
    layout: "video"
});
embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
    var player = embed.getPlayer();
    player.play();
    $(".twitch-loading").fadeOut();
});

var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
    $.getJSON(
        reqURL + iframe.getAttribute('cid'),
        function(data) {
            var link = data.items[0].link;
            var id = link.substr(link.indexOf("=") + 1);
            iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
        });
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
    loadVideo(iframes[i]);
}

$(window).on("load", function(){
    $(".loading").fadeOut();
    $(".status").addClass("online");
    $(".status").append("<span class='text-lg'>En ligne</span>");
})