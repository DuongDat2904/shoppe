<?php
include_once('ketnoi.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-colors.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-icons.min.css">
    <link rel="stylesheet" href="/acsset/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="./acsset/img/img-logo/Logo-Shopee.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/acsset/reset/normalize.css">
    <link rel="stylesheet" href="./acsset/Css/style.css">
    <link rel="stylesheet" href="./acsset/Css/base.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        input.wyhvVD._1EApiB.hq6WM5.L-VL8Q.cepDQ1._7w24N1 {
            height: 40px;
            text-align: center;
            cursor: pointer;
            top: 0;
            font-size: 16px;
            width: 100%;
            color: white;
        }

        .yup5K8 input[type="text"],.yup5K8 input[type="password"] {
            font-size: 16px !important;
        }
        .Oug9xv.Z8OMtU {
            font-size: 14px;

        }
        .Oug9xv.Z8OMtU a{
            font-size: 14px;
            font-weight: bold !important;
        }
        ::selection {
            background-color: red;
        }
    </style>
</head>

<body style="visibility: visible;">
    <div id="main">
        <style id="nebula-style">
            :root {
                --nc-primary: #ee4d2d;
                --nc-primary-bg: #fef6f5;
                --nc-primary-gradient: linear-gradient(#ee4d2d, #ff7337);
                --nc-secondary-blue: #0046ab;
                --nc-secondary-yellow: #eda500;
                --nc-secondary-green: #26aa99;
                --nc-error: #ee2c4a;
                --nc-error-bg: #fff4f4;
                --nc-caution: #f69113;
                --nc-caution-bg: #fff8e4;
                --nc-success: #30b566;
                --nc-success-bg: #f7fffe;
                --nc-text-primary: rgba(0, 0, 0, .87);
                --nc-text-primary-o: #212121;
                --nc-text-secondary: rgba(0, 0, 0, .65);
                --nc-text-secondary-o: #595959;
                --nc-text-tertiary: rgba(0, 0, 0, .54);
                --nc-text-tertiary-o: #757575;
                --nc-text-link: #0088ff;
                --nc-util-mask: rgba(0, 0, 0, .4);
                --nc-util-disabled: rgba(0, 0, 0, .26);
                --nc-util-disabled-o: #bdbdbd;
                --nc-util-line: rgba(0, 0, 0, .09);
                --nc-util-line-o: #e8e8e8;
                --nc-util-bg: #f5f5f5;
                --nc-util-placeholder: #fafafa;
                --nc-util-pressed: rgba(0, 0, 0, .05);
                --nt-font-regular-f: -apple-system, 'HelveticaNeue', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif;
                --nt-font-regular-w: 400;
                --nt-font-medium-f: -apple-system, 'HelveticaNeue-Medium', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif;
                --nt-font-medium-w: 500;
                --nt-font-bold-f: -apple-system, 'HelveticaNeue-Bold', 'Helvetica Neue', 'Roboto', 'Droid Sans', 'Arial Bold', Arial, sans-serif;
                --nt-font-bold-w: 700;
                --nt-size-foot: .625rem;
                --nt-size-foot-l: .75rem;
                --nt-size-foot-lp: .75rem;
                --nt-size-foot-t: 1rem;
                --nt-size-foot-tp: 1rem;
                --nt-size-small: .75rem;
                --nt-size-small-l: .875rem;
                --nt-size-small-lp: 1.25rem;
                --nt-size-small-t: 1.125rem;
                --nt-size-small-tp: 1.125rem;
                --nt-size-normal: .875rem;
                --nt-size-normal-l: 1rem;
                --nt-size-normal-lp: 1.25rem;
                --nt-size-normal-t: 1.375rem;
                --nt-size-normal-tp: 1.375rem;
                --nt-size-large: 1rem;
                --nt-size-large-l: 1.25rem;
                --nt-size-large-lp: 1.375rem;
                --nt-size-large-t: 1.5rem;
                --nt-size-large-tp: 1.5rem;
                --nt-size-title: 1.25rem;
                --nt-size-title-l: 1.5rem;
                --nt-size-title-lp: 1.5rem;
                --nt-size-title-t: 1.875rem;
                --nt-size-title-tp: 1.875rem;
                --ns-a: .25rem;
                --ns-b: .5rem;
                --ns-c: .75rem;
                --ns-d: 1rem;
                --ns-e: 1.25rem;
                --ns-f: 1.5rem;
                --ns-g: 2.5rem;
                --ne-depth6: 0 0 .375rem rgba(0, 0, 0, .06);
                --ne-depth9: 0 0 .5625rem rgba(0, 0, 0, .12);
                --nr-normal: .125rem;
                --nr-overlay: .25rem
            }

            .nt-foot {
                font-size: var(--nt-size-foot, .625rem);
                line-height: var(--nt-size-foot-t, 1rem)
            }

            .nt-foot-p {
                font-size: var(--nt-size-foot, .625rem);
                line-height: var(--nt-size-foot-tp, 1rem)
            }

            .nt-small {
                font-size: var(--nt-size-small, .75rem);
                line-height: var(--nt-size-small-t, 1.125rem)
            }

            .nt-small-p {
                font-size: var(--nt-size-small, .75rem);
                line-height: var(--nt-size-small-tp, 1.125rem)
            }

            .nt-normal {
                font-size: var(--nt-size-normal, .875rem);
                line-height: var(--nt-size-normal-t, 1.375rem)
            }

            .nt-normal-p {
                font-size: var(--nt-size-normal, .875rem);
                line-height: var(--nt-size-normal-tp, 1.375rem)
            }

            .nt-large {
                font-size: var(--nt-size-large, 1rem);
                line-height: var(--nt-size-large-t, 1.5rem)
            }

            .nt-large-p {
                font-size: var(--nt-size-large, 1rem);
                line-height: var(--nt-size-large-tp, 1.5rem)
            }

            .nt-title {
                font-size: var(--nt-size-title, 1.25rem);
                line-height: var(--nt-size-title-t, 1.875rem)
            }

            .nt-title-p {
                font-size: var(--nt-size-title, 1.25rem);
                line-height: var(--nt-size-title-tp, 1.875rem)
            }

            .nt-regular {
                font-family: var(--nt-font-regular-f, -apple-system, 'HelveticaNeue', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif);
                font-weight: var(--nt-font-regular-w, 400)
            }

            .nt-medium {
                font-family: var(--nt-font-medium-f, -apple-system, 'HelveticaNeue-Medium', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif);
                font-weight: var(--nt-font-medium-w, 500)
            }

            .nt-bold {
                font-family: var(--nt-font-bold-f, -apple-system, 'HelveticaNeue-Bold', 'Helvetica Neue', 'Roboto', 'Droid Sans', 'Arial Bold', Arial, sans-serif);
                font-weight: var(--nt-font-bold-w, 700)
            }
        </style>
        <div>
            <section class="lF2jXb" tabindex="-1"><button class="stardust-button u6BOJM" tabindex="10000"><span class="zV2jR+">bỏ qua nội dung chính</span></button></section>
            <div class="shopee-progress-bar"></div>
            <div class="vtexOX">
                <nav class="axexMF">
                    <div class="D3jUo5">
                        <div class="_0L93MD"><a class="UbNlH7" href="http://localhost/Shopee/"><svg viewBox="0 0 192 65" style="width:180px;height:180px;color:#ee4d2d" class="shopee-svg-icon LybVoA m2rqmO icon-shopee-logo">
                                    <g fill-rule="evenodd">
                                        <path d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"></path>
                                    </g>
                                </svg></a>
                            <div class="u9tve2">Đăng nhập</div>
                        </div><a href="" target="_blank" rel="noopener noreferrer" class="ZKvYoG">Bạn cần giúp đỡ?</a>
                    </div>
                </nav>
                <div style="background-color: rgb(238, 77, 45);">
                    <div class="_3M9lzn PeA8Gc" style="background-image: url(&quot;https://cf.shopee.vn/file/sg-11134004-23010-qacwpnvb05lve3&quot;); background-size: contain; background-repeat: no-repeat; background-position: center center;height:600px">
                        <div class="Gxi65y">
                            <div class="MIUGgs"></div>
                            <div>
                                <form method="POST" action="">
                                    <div class="IxqCyD J1i6cp B-fiUo">
                                        <div class="gZNAGg">
                                            <div class="KG+Utm">
                                                <div class="K1dDgL">Đăng nhập</div>
                                                <div class="NYkwiO">
                                                    <div class="_6ELZeI">Đăng nhập với mã QR</div>
                                                    <a class="_7nvtMo" href="./page/login-qr.php"><svg width="40" height="40" fill="none" class="sYzQJQ">
                                                            <g clip-path="url">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 0H0v18h18V0zM3 15V3h12v12H3zM18 22H0v18h18V22zm-3 15H3V25h12v12zM40 0H22v18h18V0zm-3 15H25V3h12v12z" fill="#EE4D2D"></path>
                                                                <path d="M37 37H22.5v3H40V22.5h-3V37z" fill="#EE4D2D"></path>
                                                                <path d="M27.5 32v-8h-3v8h3zM33.5 32v-8h-3v8h3zM6 6h6v6H6zM6 28h6v6H6zM28 6h6v6h-6z" fill="#EE4D2D"></path>
                                                                <path fill="#fff" d="M-4.3 4l44 43.9-22.8 22.7-43.9-44z"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0">
                                                                    <path fill="#fff" d="M0 0h40v40H0z"></path>
                                                                </clipPath>
                                                            </defs>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="yXry6s">
                                            <div></div>
                                            <div class="D3QIf1">
                                                <div class="yup5K8"><input class="pDzPRp" type="text" placeholder="Email/Số điện thoại/Tên đăng nhập" autocomplete="on" name="loginKey" maxlength="128" value=""></div>
                                                <div class="pYVjxt"></div>
                                            </div>
                                            <div class="vkgBkQ">
                                                <div class="yup5K8"><input class="pDzPRp" type="password" placeholder="Mật khẩu" autocomplete="current-password" name="password" maxlength="16" value=""></div>
                                                <div class="pYVjxt"></div>
                                            </div>
                                            <input type="submit" value="Đăng nhập" name="login" class="wyhvVD _1EApiB hq6WM5 L-VL8Q cepDQ1 _7w24N1 ">
                                            <div class="tRiWov"><a class="anLGcx">Quên mật khẩu</a><a class="anLGcx" onclick="launch_toast()">Đăng nhập với SMS</a></div>
                                            <div class="_6yKazv">
                                                <div class="lhhucE">
                                                    <div class="lreZhl"></div><span class="PqS8vj">hoặc</span>
                                                    <div class="lreZhl"></div>
                                                </div>
                                                <div class="_3051nA"><button class="nGTAZw lyJbNT bQ2eCN">
                                                        <div class="Bq4Bra">
                                                            <div class="_1a550J social-white-background social-white-fb-blue-png"></div>
                                                        </div>
                                                        <div class="">Facebook</div>
                                                    </button><button class="nGTAZw lyJbNT bQ2eCN">
                                                        <div class="Bq4Bra">
                                                            <div class="_1a550J social-white-background social-white-google-png"></div>
                                                        </div>
                                                        <div class="">Google</div>
                                                    </button>
                                                    <button class="nGTAZw lyJbNT bQ2eCN">
                                                        <div class="Bq4Bra">
                                                            <div class="_1a550J social-white-background social-white-apple-black-png"></div>
                                                        </div>
                                                        <div class="">Apple</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="XLzpXt">
                                            <div class="Oug9xv Z8OMtU">Bạn mới biết đến Shopee? <a class="wzgwUg" href="http://localhost/Shopee/register-dki.php">Đăng ký</a></div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <footer class="hZqP02">
                    <div class="jP2PzH">
                        <div class="ibAPxC">
                            <div class="PuXQrZ">
                                <div class="JMCbqu">CHĂM SÓC KHÁCH HÀNG</div>
                                <ul class="SOb2n7">
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Trung Tâm Trợ Giúp</span></a></li>
                                    <li class="o8Gbgv"><a href="https://shopee.vn/blog/" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Shopee Blog</span></a></li>
                                    <li class="o8Gbgv">
                                        <a href="https://help.shopee.vn/portal/article/79090-[Th%C3%A0nh-vi%C3%AAn-m%E1%BB%9Bi]-Shopee-Mall-l%C3%A0-g%C3%AC?previousPage=search%20recommendation%20bar" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Shopee Mall</span></a>
                                    </li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/article/79180-[Th%c3%a0nh-vi%c3%aan-m%e1%bb%9bi]-L%c3%a0m-sao-%c4%91%e1%bb%83-mua-h%c3%a0ng-%2F-%c4%91%e1%ba%b7t-h%c3%a0ng-tr%c3%aan-%e1%bb%a9ng-d%e1%bb%a5ng-Shopee%3F" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Hướng Dẫn Mua Hàng</span></a></li>
                                    <li class="o8Gbgv"><a href="https://banhang.shopee.vn/edu/article/13243/ban-hang-online-bat-dau-tu-dau" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Hướng Dẫn Bán Hàng</span></a></li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/category/59-Thanh-To%C3%A1n/708-V%C3%AD-ShopeePay?page=1" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Thanh Toán</span></a></li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/article/79144-[Shopee-Xu]-C%c3%a1c-c%c3%a2u-h%e1%bb%8fi-th%c6%b0%e1%bb%9dng-g%e1%ba%b7p" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Shopee Xu</span></a></li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/category/60-%C4%90%C6%A1n-H%C3%A0ng-V%E1%BA%ADn-Chuy%E1%BB%83n/703-%C4%90%C6%A1n-h%C3%A0ng?page=1" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Vận Chuyển</span></a></li>
                                    <li class="o8Gbgv">
                                        <a href="https://help.shopee.vn/portal/article/79258-Tr%e1%ba%a3-h%c3%a0ng%2FHo%c3%a0n-ti%e1%bb%81n]-C%e1%ba%a9m-nang-Tr%e1%ba%a3-h%c3%a0ng-ho%c3%a0n-ti%e1%bb%81n" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Trả Hàng &amp; Hoàn Tiền</span></a>
                                    </li>
                                    <li class="o8Gbgv">
                                        <a href="https://help.shopee.vn/portal/article/79191-%5BD%E1%BB%8Bch-v%E1%BB%A5%5D-L%C3%A0m-sao-%C4%91%E1%BB%83-li%C3%AAn-h%E1%BB%87-Ch%C4%83m-s%C3%B3c-Kh%C3%A1ch-h%C3%A0ng" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Chăm Sóc Khách Hàng</span></a>
                                    </li>
                                    <li class="o8Gbgv">
                                        <a href="https://help.shopee.vn/portal/article/79046-[Quy-%c4%91%e1%bb%8bnh]-Ch%c3%adnh-s%c3%a1ch-b%e1%ba%a3o-h%c3%a0nh-cho-s%e1%ba%a3n-ph%e1%ba%a9m-mua-t%e1%ba%a1i-Shopee" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Chính Sách Bảo Hành</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="PuXQrZ">
                                <div class="JMCbqu">VỀ SHOPEE</div>
                                <ul class="SOb2n7">
                                    <li class="o8Gbgv"><a href="https://careers.shopee.vn/about" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Giới Thiệu Về Shopee Việt Nam</span></a></li>
                                    <li class="o8Gbgv"><a href="https://careers.shopee.vn/jobs" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Tuyển Dụng</span></a></li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/article/77242" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Điều Khoản Shopee</span></a></li>
                                    <li class="o8Gbgv"><a href="https://help.shopee.vn/portal/article/77244" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Chính Sách Bảo Mật</span></a></li>
                                    <li class="o8Gbgv"><a href="https://shopee.vn/mall/" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Chính Hãng</span></a></li>
                                    <li class="o8Gbgv"><a href="https://banhang.shopee.vn/" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Kênh Người Bán</span></a></li>
                                    <li class="o8Gbgv"><a href="https://shopee.vn/flash_sale/" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Flash Sales</span></a></li>
                                    <li class="o8Gbgv"><a href="https://shopee.vn/affiliate/" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Chương Trình Tiếp Thị Liên Kết Shopee</span></a></li>
                                    <li class="o8Gbgv"><a href="mailto:media.vn%40shopee.com" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><span class="xTjlXx">Liên Hệ Với Truyền Thông</span></a></li>
                                </ul>
                            </div>
                            <div class="PuXQrZ">
                                <div class="JMCbqu">THANH TOÁN</div>
                                <ul class="D7qxb9">
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/d4bbea4570b93bfd5fc652ca82a262a8" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/a0a9062ebe19b45c1ae0506f16af5c16" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/38fd98e55806c3b2e4535c4e4a6c4c08" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/bc2a874caeee705449c164be385b796c" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/2c46b83d84111ddc32cfd3b5995d9281" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/5e3f0bee86058637ff23cfdf2e14ca09" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/9263fa8c83628f5deff55e2a90758b06" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/0217f1d345587aa0a300e69e2195c492" alt="logo"></a>
                                    </li>
                                </ul>
                                <div class="JMCbqu wTATIi">ĐƠN VỊ VẬN CHUYỂN</div>
                                <ul class="D7qxb9">
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/5e7282bd0f7ee0872fdb0bd1d40fbe9e" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/d10b0ec09f0322f9201a4f3daf378ed2" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/77bf96a871418fbc21cc63dd39fb5f15" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/59270fb2f3fbb7cbc92fca3877edde3f" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/957f4eec32b963115f952835c779cd2c" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/0d349e22ca8d4337d11c9b134cf9fe63" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/3900aefbf52b1c180ba66e5ec91190e5" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/6e3be504f08f88a15a28a9a447d94d3d" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/b8348201b4611fc3315b82765d35fc63" alt="logo"></a>
                                    </li>
                                    <li class="uqMJQA">
                                        <a target="_blank" rel="noopener noreferrer" class="_2pbE-b"><img src="https://cf.shopee.vn/file/0b3014da32de48c03340a4e4154328f6" alt="logo"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="PuXQrZ">
                                <div class="JMCbqu">THEO DÕI CHÚNG TÔI TRÊN</div>
                                <ul class="SOb2n7">
                                    <li class="o8Gbgv">
                                        <a href="https://www.facebook.com/ShopeeVN" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><img class="_6ZyW8Y" src="https://cf.shopee.vn/file/2277b37437aa470fd1c71127c6ff8eb5"><span class="xTjlXx">Facebook</span></a>
                                    </li>
                                    <li class="o8Gbgv">
                                        <a href="https://instagram.com/Shopee_VN" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><img class="_6ZyW8Y" src="https://cf.shopee.vn/file/5973ebbc642ceee80a504a81203bfb91"><span class="xTjlXx">Instagram</span></a>
                                    </li>
                                    <li class="o8Gbgv">
                                        <a href="https://www.linkedin.com/company/shopee" class="FA0WjS" title="" target="_blank" rel="noopener noreferrer"><img class="_6ZyW8Y" src="https://cf.shopee.vn/file/f4f86f1119712b553992a75493065d9a"><span class="xTjlXx">LinkedIn</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="PuXQrZ">
                                <div class="JMCbqu">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</div>
                                <div class="pkg67p">
                                    <a href="https://shopee.vn/web" target="_blank" rel="noopener noreferrer"><img src="https://cf.shopee.vn/file/a5e589e8e118e937dc660f224b9a1472" alt="download_qr_code" class="ebQ6br"></a>
                                    <div class="zLPzwH">
                                        <a href="https://shopee.vn/web" target="_blank" rel="noopener noreferrer" class="W4jGm6"><img src="https://cf.shopee.vn/file/ad01628e90ddf248076685f73497c163" alt="app"></a>
                                        <a href="https://shopee.vn/web" target="_blank" rel="noopener noreferrer" class="W4jGm6"><img src="https://cf.shopee.vn/file/ae7dced05f7243d0f3171f786e123def" alt="app"></a>
                                        <a href="https://shopee.vn/web" target="_blank" rel="noopener noreferrer" class="W4jGm6"><img src="https://cf.shopee.vn/file/35352374f39bdd03b25e7b83542b2cb0" alt="app"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-96EVm">
                            <div class="_0lbTUw syJk0q">© 2023 Shopee. Tất cả các quyền được bảo lưu.</div>
                            <div class="qtxc6i">
                                <div class="ircc-H syJk0q">Quốc gia &amp; Khu vực:</div>
                                <div class="iDTkf9"><a href="https://shopee.sg" class="syJk0q _1yz5p4">Singapore</a></div>
                                <div class="iDTkf9"><a href="https://shopee.co.id" class="syJk0q _1yz5p4">Indonesia</a></div>
                                <div class="iDTkf9"><a href="https://shopee.tw" class="syJk0q _1yz5p4">Đài Loan</a></div>
                                <div class="iDTkf9"><a href="https://shopee.co.th" class="syJk0q _1yz5p4">Thái Lan</a></div>
                                <div class="iDTkf9"><a href="https://shopee.com.my" class="syJk0q _1yz5p4">Malaysia</a></div>
                                <div class="iDTkf9"><a href="https://shopee.vn" class="syJk0q _1yz5p4">Việt Nam</a></div>
                                <div class="iDTkf9"><a href="https://shopee.ph" class="syJk0q _1yz5p4">Philippines</a></div>
                                <div class="iDTkf9"><a href="https://shopee.com.br" class="syJk0q _1yz5p4">Brazil</a></div>
                                <div class="iDTkf9"><a href="https://shopee.com.mx" class="syJk0q _1yz5p4">México</a></div>
                                <div class="iDTkf9"><a href="https://shopee.com.co" class="syJk0q _1yz5p4">Colombia</a></div>
                                <div class="iDTkf9"><a href="https://shopee.cl" class="syJk0q _1yz5p4">Chile</a></div>
                                <div class="iDTkf9"><a href="https://shopee.pl" class="syJk0q _1yz5p4">Poland</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="_4FDN71">
                        <div class="Hyfopi">
                            <div class="EWPRwa">
                                <div class="d56atc"><a class="Dc8l4L" href="https://help.shopee.vn/portal/article/77244"><span>Chính sách bảo mật</span></a></div>
                                <div class="d56atc"><a class="Dc8l4L" href="https://help.shopee.vn/portal/article/77245"><span>Quy chế hoạt động</span></a></div>
                                <div class="d56atc"><a class="Dc8l4L" href="https://help.shopee.vn/portal/article/77250"><span>Chính sách vận chuyển</span></a></div>
                                <div class="d56atc"><a class="Dc8l4L" href="https://help.shopee.vn/portal/article/77251"><span>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</span></a></div>
                            </div>
                            <div class="CpmibF">
                                <a target="_blank" rel="noopener noreferrer" href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=18375" class="_44TnCg">
                                    <div class="footer-vn-background footer-vn-vn_registered_red-png jeaJPZ"></div>
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="http://online.gov.vn/HomePage/AppDisplay.aspx?DocId=29" class="_44TnCg">
                                    <div class="footer-vn-background footer-vn-vn_registered_red-png jeaJPZ"></div>
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="https://shopee.vn/docs/170" class="_44TnCg">
                                    <div class="footer-vn-background footer-vn-vn_no_fake_item-png b1v1Th"></div>
                                </a>
                            </div>
                            <div class="BV2E6Y ggg4D-">Công ty TNHH Shopee</div>
                            <div class="BV2E6Y">Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn</div>
                            <div class="BV2E6Y">Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí - Điện thoại liên hệ: 024 73081221 (ext 4678)</div>
                            <div class="BV2E6Y">Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch &amp; Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015</div>
                            <div class="BV2E6Y">© 2015 - Bản quyền thuộc về Công ty TNHH Shopee</div>
                        </div>
                    </div>
                </footer>
            </div>
            <div></div>
            <div class="u+rzIW" id="BackgroundImagePortalAnchor"></div>
        </div>
    </div>
    <div id="toast">
        <div id="img"><i class="fa-solid fa-circle-exclamation"></i></div>
        <div id="desc">Chức năng đang được cập nhật</div>
    </div>
    <?php

    if (isset($_POST['login'])) {
        $user = $_POST['loginKey'];
        $pass = $_POST['password'];
        $sql = "select * from user where username='$user' and password=MD5('$pass')";
        $result = mysqli_query($conn, $sql);
        $sison = mysqli_fetch_assoc($result);
        if (!$user || !$pass) {
            echo '<script language="javascript"> alert("Thiếu thông tin");</script>';
            exit;
        }
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = $sison;
            echo '<script language="javascript"> alert("đăng nhập thành công");window.location="home.php"</script>';
        } else {
            echo '<script language="javascript"> alert("đăng nhập thất thất bại");window.location="login.php"</script>';
        }
    }
    ?>
</body>
<script src="./acsset/Css/main.js"></script>
<script>
    function launch_toast() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 5000);
    }

    const passField = document.querySelector("input");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (() => {
        if (passField.type === "password") {
            passField.type = "text";
            showBtn.classList.add("hide-btn");
        } else {
            passField.type = "password";
            showBtn.classList.remove("hide-btn");
        }
    });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    //chống click chuột phải

var message = "NoRightClicking";

function defeatIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function defeatNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = defeatNS;
} else {
    document.onmouseup = defeatNS;
    document.oncontextmenu = defeatIE;
}
document.oncontextmenu = new Function("return false")

// chống ctrl + U
document.onkeydown = function(e) {
    if (e.ctrlKey &&
        (e.keyCode === 67 ||
            e.keyCode === 86 ||
            e.keyCode === 85 ||
            e.keyCode === 117)) {
        return false;
    } else {
        return true;
    }
};
$(document).keypress("u", function(e) {
    if (e.ctrlKey) {
        return false;
    } else {
        return true;
    }
});
</script>


</html>