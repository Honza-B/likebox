<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&appId=330927440385257";
        fjs.parentNode.insertBefore(js, fjs);
    }
        (document, 'script', 'facebook-jssdk')
    );
</script>

<style type="text/css">
    .bonus-box {
        font-family: Tahoma;
        background: #FFDB4D;
    }
    
    .bonus-box p {
        font-weight: 400;
    }
</style>

<?php
include('src/facebook.php');

$config['appid' ] = "154817238062054";
$config['secret'] = "651640527c71851130c2e60c5bcbd138";

// Create our Application instance.
$facebook = new Facebook(array(
    'appId'  => $config['appid'],
    'secret' => $config['secret'],
    'cookie' => true
));

$signedRequest = $facebook->getSignedRequest();
if($signedRequest['page']['liked'] == 1) { //pokud je like na stranku -> zobrazi se kod
    echo '<div class="bonus-box">
        <h1>Váš bonusový kód</h1>
        <p>OB64GKS7K9</p>
    </div>';
} else { //pokud neni like na stranku -> zobrazi se likebox
    echo '<div class="fb-like-box" data-href="https://www.facebook.com/pages/Med-nen%C3%AD-jed/649741231722878" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>';
}
?>