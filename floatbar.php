<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
    <title></title>
    <style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .topnav {
    overflow: hidden;
    background-color: #333;
  }
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  <!--style for glyphicon
  .a2a_hide{display:none}
  a2a_logo_color{
    background-color:#0166ff}
    a2a_menu,.a2a_menu *{
      -moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;float:none;margin:0;padding:0;position:static;height:auto;width:auto
    }
    a2a_menu{
      border-radius:6px;
      display:none;
      direction:ltr;
      background:#FFF;
      font:16px 
      sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;
      color:#000;line-height:12px;border:1px solid #CCC;vertical-align:baseline;overflow:hidden
    }
    a2a_mini{
      min-width:200px;
      position:absolute;width:300px;
      z-index:9999997
    }
    a2a_overlay{display:none;
      background:#616c7d;
      opacity:.92;
      backdrop-filter:blur(8px);
      position:fixed;
      top:0;
      right:0;
      left:0;
      bottom:0;
      z-index:9999998;
      -webkit-tap-highlight-color:transparent;
      transition:opacity .14s,backdrop-filter .14s
    }
  
    a2a_full{
      background:#FFF;border:1px solid #FFF;
      height:auto;height:calc(320px);
      top:15%;left:50%;margin-left:-320px;
      position:fixed;text-align:center;
      width:640px;
      z-index:9999999;
      transition:transform .14s,opacity .14s
    }
  
    a2a_full_footer,.a2a_full_header,.a2a_full_services{border:0;margin:0;padding:12px;box-sizing:border-box}.a2a_full_header{padding-bottom:8px}.a2a_full_services{height:280px;overflow-y:scroll;padding:0 12px;-webkit-overflow-scrolling:touch}.a2a_full_services .a2a_i{display:inline-block;float:none;width:181px;width:calc(33.334% - 18px)}div.a2a_full_footer{font-size:12px;text-align:center;padding:8px 14px}div.a2a_full_footer a,div.a2a_full_footer a:visited{display:inline;font-size:12px;line-height:14px;padding:8px 14px}div.a2a_full_footer a:focus,div.a2a_full_footer a:hover{background:0 0;border:0;color:#0166FF}div.a2a_full_footer a span.a2a_s_a2a,div.a2a_full_footer a span.a2a_w_a2a{background-size:14px;border-radius:3px;display:inline-block;height:14px;line-height:14px;margin:0 3px 0 0;vertical-align:top;width:14px}.a2a_modal{height:0;left:50%;margin-left:-320px;position:fixed;text-align:center;top:15%;width:640px;z-index:9999999;transition:transform .14s,opacity .14s;-webkit-tap-highlight-color:transparent}.a2a_modal_body{background:0 0;border:0;font:24px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;position:relative;height:auto;width:auto}.a2a_thanks{color:#fff;height:auto;margin-top:20px;width:auto}.a2a_thanks>div:first-child{margin:0 0 40px 0}.a2a_thanks div *{height:inherit}#a2a_copy_link{background:#FFF;border:1px solid #FFF;margin-top:15%}span.a2a_s_link#a2a_copy_link_icon,span.a2a_w_link#a2a_copy_link_icon{background-size:48px;border-radius:0;display:inline-block;height:48px;left:0;line-height:48px;margin:0 3px 0 0;position:absolute;vertical-align:top;width:48px}#a2a_modal input#a2a_copy_link_text{background-color:transparent;border:0;color:#2A2A2A;font:inherit;height:48px;left:62px;max-width:initial;padding:0;position:relative;width:564px;width:calc(100% - 76px)}#a2a_copy_link_copied{background-color:#0166ff;color:#fff;display:none;font:inherit;font-size:16px;margin-top:1px;padding:3px 8px}@media (prefers-color-scheme:dark){.a2a_menu a,.a2a_menu a.a2a_i,.a2a_menu a.a2a_i:visited,.a2a_menu a.a2a_more,i.a2a_i{border-color:#2a2a2a!important;color:#fff!important}.a2a_menu a.a2a_i:active,.a2a_menu a.a2a_i:focus,.a2a_menu a.a2a_i:hover,.a2a_menu a.a2a_more:active,.a2a_menu a.a2a_more:focus,.a2a_menu a.a2a_more:hover,.a2a_menu_find_container{border-color:#444!important;background-color:#444!important}.a2a_menu{background-color:#2a2a2a;border-color:#2a2a2a}.a2a_menu_find{color:#fff!important}.a2a_menu span.a2a_s_find svg{background-color:transparent!important}.a2a_menu span.a2a_s_find svg path{fill:#fff!important}}@media print{.a2a_floating_style,.a2a_menu,.a2a_overlay{visibility:hidden}}@keyframes a2aFadeIn{from{opacity:0}to{opacity:1}}.a2a_starting{opacity:0}.a2a_starting.a2a_full,.a2a_starting.a2a_modal{transform:scale(.8)}@media (max-width:639px){.a2a_full{border-radius:0;top:15%;left:0;margin-left:auto;width:100%}.a2a_modal{left:0;margin-left:10px;width:calc(100% - 20px)}}@media (min-width:318px) and (max-width:437px){.a2a_full .a2a_full_services .a2a_i{width:calc(50% - 18px)}}@media (max-width:317px){.a2a_full .a2a_full_services .a2a_i{width:calc(100% - 18px)}}@media (max-height:436px){.a2a_full{bottom:40px;height:auto;top:40px}}@media (max-height:550px){.a2a_modal{top:30px}}@media (max-height:360px){.a2a_modal{top:20px}.a2a_thanks>div:first-child{margin-bottom:20px}}.a2a_menu a{color:#0166FF;text-decoration:none;font:16px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;line-height:14px;height:auto;width:auto;outline:0}.a2a_menu a.a2a_i:visited,.a2a_menu a.a2a_more{color:#0166FF}.a2a_menu a.a2a_i:active,.a2a_menu a.a2a_i:focus,.a2a_menu a.a2a_i:hover,.a2a_menu a.a2a_more:active,.a2a_menu a.a2a_more:focus,.a2a_menu a.a2a_more:hover{color:#2A2A2A;border-color:#EEE;border-style:solid;background-color:#EEE;text-decoration:none}.a2a_menu span.a2a_s_find{background-size:24px;height:24px;left:8px;position:absolute;top:7px;width:24px}.a2a_menu span.a2a_s_find svg{background-color:#FFF}.a2a_menu span.a2a_s_find svg path{fill:#CCC}#a2a_menu_container{display:inline-block}.a2a_menu_find_container{border:1px solid #CCC;border-radius:6px;padding:2px 24px 2px 0;position:relative;text-align:left}.a2a_cols_container .a2a_col1{overflow-x:hidden;overflow-y:auto;-webkit-overflow-scrolling:touch}#a2a_modal input,#a2a_modal input[type=text],.a2a_menu input,.a2a_menu input[type=text]{display:block;background-image:none;box-shadow:none;line-height:100%;margin:0;outline:0;overflow:hidden;padding:0;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-appearance:none}#a2afeed_find_container input,#a2afeed_find_container input[type=text],#a2apage_find_container input,#a2apage_find_container input[type=text]{background-color:transparent;border:0;box-sizing:content-box;color:#2A2A2A;font:inherit;font-size:16px;height:28px;line-height:20px;left:38px;outline:0;margin:0;max-width:initial;padding:2px 0;position:relative;width:99%}.a2a_clear{clear:both}.a2a_svg{background-repeat:no-repeat;display:block;overflow:hidden;height:32px;line-height:32px;padding:0;width:32px}.a2a_svg svg{background-repeat:no-repeat;background-position:50% 50%;border:none;display:block;left:0;margin:0 auto;overflow:hidden;padding:0;position:relative;top:0;width:auto;height:auto}a.a2a_i,i.a2a_i{display:block;float:left;border:1px solid #FFF;line-height:24px;padding:6px 8px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:132px}a.a2a_i span,a.a2a_more span{display:inline-block;overflow:hidden;vertical-align:top}a.a2a_i .a2a_svg{margin:0 6px 0 0}a.a2a_i .a2a_svg,a.a2a_more .a2a_svg{background-size:24px;height:24px;line-height:24px;width:24px}a.a2a_sss:hover{border-left:1px solid #CCC}a.a2a_more{border-bottom:1px solid #FFF;border-left:0;border-right:0;line-height:24px;margin:6px 0 0;padding:6px;-webkit-touch-callout:none}a.a2a_more span{height:24px;margin:0 6px 0 0}.a2a_kit .a2a_svg{background-repeat:repeat}.a2a_default_style a{float:left;line-height:16px;padding:0 2px}.a2a_default_style a:hover .a2a_svg,.a2a_floating_style a:hover .a2a_svg,.a2a_overlay_style a:hover .a2a_svg svg{opacity:.7}.a2a_overlay_style.a2a_default_style a:hover .a2a_svg{opacity:1}.a2a_default_style .a2a_count,.a2a_default_style .a2a_svg,.a2a_floating_style .a2a_svg,.a2a_menu .a2a_svg,.a2a_vertical_style .a2a_count,.a2a_vertical_style .a2a_svg{border-radius:4px}.a2a_default_style .a2a_counter img,.a2a_default_style .a2a_dd,.a2a_default_style .a2a_svg{float:left}.a2a_default_style .a2a_img_text{margin-right:4px}.a2a_default_style .a2a_divider{border-left:1px solid #000;display:inline;float:left;height:16px;line-height:16px;margin:0 5px}.a2a_kit a{cursor:pointer}.a2a_floating_style{background-color:#fff;border-radius:6px;position:fixed;z-index:9999995}.a2a_overlay_style{z-index:2147483647}.a2a_floating_style,.a2a_overlay_style{animation:a2aFadeIn .2s ease-in;padding:4px}.a2a_vertical_style a{clear:left;display:block;overflow:hidden;padding:4px;text-decoration:none}.a2a_floating_style.a2a_default_style{bottom:0}.a2a_floating_style.a2a_default_style a,.a2a_overlay_style.a2a_default_style a{padding:4px}.a2a_count{background-color:#fff;border:1px solid #ccc;box-sizing:border-box;color:#2a2a2a;display:block;float:left;font:12px Arial,Helvetica,sans-serif;height:16px;margin-left:4px;position:relative;text-align:center;width:50px}.a2a_count:after,.a2a_count:before{border:solid transparent;border-width:4px 4px 4px 0;content:"";height:0;left:0;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:50%;width:0}.a2a_count:before{border-right-color:#ccc}.a2a_count:after{border-right-color:#fff;margin-left:-3px}.a2a_count span{animation:a2aFadeIn .14s ease-in}.a2a_vertical_style .a2a_counter img{display:block}.a2a_vertical_style .a2a_count{float:none;margin-left:0;margin-top:6px}.a2a_vertical_style .a2a_count:after,.a2a_vertical_style .a2a_count:before{border:solid transparent;border-width:0 4px 4px 4px;content:"";height:0;left:50%;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:0;width:0}.a2a_vertical_style .a2a_count:before{border-bottom-color:#ccc}.a2a_vertical_style .a2a_count:after{border-bottom-color:#fff;margin-top:-3px}.a2a_nowrap{white-space:nowrap}.a2a_note{margin:0 auto;padding:9px;font-size:12px;text-align:center}.a2a_note .a2a_note_note{margin:0;color:#2A2A2A}.a2a_wide a{display:block;margin-top:3px;border-top:1px solid #EEE;text-align:center}.a2a_label{position:absolute!important;clip-path:polygon(0px 0px,0px 0px,0px 0px);-webkit-clip-path:polygon(0px 0px,0px 0px,0px 0px);overflow:hidden;height:1px;width:1px}.a2a_kit,.a2a_menu,.a2a_modal,.a2a_overlay{-ms-touch-action:manipulation;touch-action:manipulation;outline:0}.a2a_dd img{border:0}.a2a_button_facebook_like iframe{max-width:none}
    
   
#btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
}
  
  </style>
</head>
<body>
    


<!-- floating bar code -->

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" data-a2a-scroll-show="100,100" style="right: 0px; top: 150px; background-color: transparent; line-height: 32px;">
  <a class="a2a_button_facebook" href="/#facebook" title="Facebook" rel="nofollow noopener" target="_blank">
  <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(24, 119, 242);">

  <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
    <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z">
      
    </path>
  </svg>
</span>
<span class="a2a_label">Facebook</span>
</a>
<a class="a2a_button_whatsapp" href=" https://wa.me/254705403865" title="WhatsApp" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 005.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 01-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path></svg></span>
  <span class="a2a_label">WhatsApp</span>
</a>
<a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank">
  <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
    <path fill="#FFF" d="M28 8.557a9.913 9.913 0 01-2.828.775 4.93 4.93 0 002.166-2.725 9.738 9.738 0 01-3.13 1.194 4.92 4.92 0 00-3.593-1.55 4.924 4.924 0 00-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 00-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 01-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 004.6 3.42 9.893 9.893 0 01-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 007.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
  </svg>
</span>
<span class="a2a_label">Twitter</span>
</a>
<a class="a2a_button_linkedin" href="/#linkedin" title="LinkedIn" rel="nofollow noopener" target="_blank">
  <span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
    <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 010 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF">
    </path>
  </svg>
</span>
<span class="a2a_label">LinkedIn</span>
</a>
<a class="a2a_button_facebook_messenger" href="/#facebook_messenger" title="Messenger" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook_messenger" style="background-color: rgb(0, 132, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
  <path fill="#FFF" d="M16 5C9.986 5 5.11 9.56 5.11 15.182c0 3.2 1.58 6.054 4.046 7.92V27l3.716-2.06c.99.276 2.04.425 3.128.425 6.014 0 10.89-4.56 10.89-10.183S22.013 5 16 5zm1.147 13.655L14.33 15.73l-5.423 3 5.946-6.31 2.816 2.925 5.42-3-5.946 6.31z">
  </path>
</svg>
</span>
<span class="a2a_label">Messenger</span>
</a>
<a class="a2a_button_email" href="/#email" title="Email" rel="nofollow noopener" target="_blank">
  <span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);">
    <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <path fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z">
      </path>
    </svg>
  </span>
  <span class="a2a_label">Email</span>
</a>

</a>
</div>
<!-- end of floating bar code -->

</body>
</html>