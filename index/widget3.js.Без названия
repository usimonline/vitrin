/*
*
 Instruction:

 Place that code close to </body> tag at the end of page
 and then place onClick="showSonlineWidget(sonlineWidgetOptions);" anywhere you need

 <script>
 var sonlineWidgetOptions = {
 groupid: 55, // if you know groupid
 placeid: 1,  // or placeid (groupid is higher than placeid)
 cityid: 1,  // cityid (optional)
 bgcolor: '183249', // (optional)
 activecolor: 'f2720c', // (optional)
 link: '3c3f42', // (optional)
 linkactive: 'fff',  // (optional)
 linkdone: '9fa1a2', // (optional)
 // windowedMode: true // fullscreen by default, but this setting center small widget window if you prefer
 roistatid: 'xxxxx', // (optional) roistat.com integration, visit id
 }
 </script>
 <div id="widgetSonline"/>
 <script type="text/javascript" src="https://sonline.su/js/widget3/widget3.js"></script>
* */
function FrameListener(){
  var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
  var eventer = window[eventMethod];
  var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
  eventer(messageEvent,function(e) {
    if(e.data==='closeSonlineWidget') {
      document.getElementById('widgetSonline').innerHTML='';
    }
  },false);};

function showSonlineWidget(options) {
  var extra_options='';
  var extra_options_mobile='';
  if((options.passgetparams==1 || true) && window.location.search.substring(1).length>0 ){
    extra_options='&'+window.location.search.substring(1)+window.location.hash;
    extra_options_mobile='?'+window.location.search.substring(1)+window.location.hash;
  }
  if(options.placeid==6889){
    var gobj = window[window.GoogleAnalyticsObject];
    tracker = gobj.getAll()[0];
    linker = new window.gaplugins.Linker(tracker);
    var google_options= linker.decorate('');
    google_options = google_options.replace(/\?/, "");
    extra_options='&'+google_options;
  }


    document.getElementById('widgetSonline').innerHTML = '<iframe src="https://widget.sonline.su/ru/'+
      (options.groupid?'map/?groupid='+options.groupid:'services/?placeid='+options.placeid)+
      (options.cityid?'&cityid='+options.cityid:'')+
      (options.bgcolor?'&bgcolor='+options.bgcolor:'')+
      (options.activecolor?'&activecolor='+options.activecolor:'')+
      (options.link?'&link='+options.link:'')+
      (options.linkactive?'&linkactive='+options.linkactive:'')+
      (options.linkdone?'&linkdone='+options.linkdone:'')+
      (options.roistatid?'&roistatid='+options.roistatid:'')+
      extra_options+
      '" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"></iframe></div><style>#widgetSonline{z-index: 999999999; position:relative;}</style><style>div#widgetSonline iframe {' + (options.windowedMode ? 'position: fixed;top: 50%;left: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);height:660px;width:810px;box-shadow: 60px 60px 60px rgba(0, 0, 0, .5);' : 'position: fixed;top: 100%;left: 100%;-webkit-transform: translate(-100%, -100%);transform: translate(-100%, -100%);height:100%;width:100%;') + '};</style>';
  FrameListener();
}
