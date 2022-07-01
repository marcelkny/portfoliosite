<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="css/img/favicon.ico">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <title>Marcel Kny Profil</title>
  </head>
  <body>
        <header>
            <div id="logo_div">
                <a href="#home">
                    <img id="mylogo" src="css/img/mk_logo.png" alt=""/>
                </a>
            </div>
            <input type="checkbox" id="check">
            <label for="check" id="label_check"></label>
            <div class="navbar_top">
                <ul class="navbar_nav">
                    <li class="nav_item">
                        <a class="nav_link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link scroll" href="#about">Über mich</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link scroll" href="#portfolio">Portfolio</a>
                    </li>

                    <li class="nav_item kontakt">
                        
                        <a class="nav_link scroll" id="kontaktlink" href="#kontakt">Kontakt</a>
                        
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <div class="section" id="home">
                <h2>Willkommen</h2>
                
            </div>
            <hr class="myhr">
            <div class="section" id="about">
                <div class="about_flex">
                    <h2 id="h_myname">Marcel Kny</h2>
                    <p><b>Fachinformatiker für Anwendungsentwicklung</b><i> (in Ausbildung)</i></p><br>
                    <p class="p_paragraph"><i>„Jeder der aufhört zu lernen, ist alt, mag er zwanzig oder achtzig Jahre zählen. Jeder, der weiterlernt, ist jung, mag er zwanzig oder achtzig Jahre alt sein.“</i> (Henry Ford)</p>
                    <!-- <p class="p_paragraph"><i>„Der Natur des Menschen entspricht es nicht, immer in eine Richtung zu gehen; sie hat ihr Kommen und Gehen.“</i> (Blaise Pascal)</p> -->
                    <h3 class="h_sectioncontent">Zu meiner Person:</h3>
                    <div class="about_sectioncontent">
                        <div class="pers_info_50">
                            <p>Alter</p>
                            <p>32 Jahre</p>
                        </div>
                        <div class="pers_info_50">
                            <p>Email</p>
                            <p>kontakt@knymarcel.de</p>
                        </div>
                        <div class="pers_info_50">
                            <p>Wohnort</p>
                            <p>Halle Saale, SA</p>
                        </div>
                        <div class="pers_info_50"></div>
                    </div>
                    <h3 class="h_sectioncontent">Interessen:</h3>
                    <div class="about_sectioncontent">
                        <div class="pers_info_25" id="pers_info_hum" onclick="showPersInfo('pers_info_hum')">
                            <p>Menschen</p>
                        </div>
                        <div class="pers_info_25" id="pers_info_crea" onclick="showPersInfo('pers_info_crea')">
                            <p>Kreativität</p>
                        </div>
                        <div class="pers_info_25" id="pers_info_nat" onclick="showPersInfo('pers_info_nat')">
                            <p>Natur</p>
                        </div>
                        <div class="pers_info_25" id="pers_info_tech" onclick="showPersInfo('pers_info_tech')">
                            <p>Technik</p>
                        </div>
                    </div>
                    <div class="info_txt_div" id="info_txt_div"></div>
                </div>
                <div class="about_flex">
                    <div class="portfolio_card" id="language_card">
                        <h3>Beruflich:</h3>
                        <div class="codinglanguagecontainers">
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><path d="M145 96l66 746.6L511.8 928l299.6-85.4L878.7 96H145zm610.9 700.6l-244.1 69.6-245.2-69.6-56.7-641.2h603.8l-57.8 641.2zM281 249l1.7 24.3 22.7 253.5h206.5v-.1h112.9l-11.4 118.5L511 672.9v.2h-.8l-102.4-27.7-6.5-73.2h-91l11.3 144.7 188.6 52h1.7v-.4l187.7-51.7 1.7-16.3 21.2-242.2 3.2-24.3H511v.2H389.9l-8.2-94.2h352.1l1.7-19.5 4.8-47.2L742 249H511z"></path></svg>
                                <p>HTML/CSS</p>
                            </div>
                            <div class="codinglanguagecontainer">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"></path></svg>
                                <p>PHP</p>
                            </div>
                            <div class="codinglanguagecontainer">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M23.157 4.412c-.676.284-.79.31-1.673.372-.65.045-.757.057-1.212.209-.75.246-1.395.75-2.02 1.59-.296.398-1.249 1.913-1.249 1.988 0 .057-.65.998-.915 1.32-.574.713-1.08 1.079-2.14 1.59-.77.36-1.224.524-4.102 1.477-1.073.353-2.133.738-2.367.864-.852.449-1.515 1.036-2.203 1.938-1.003 1.32-.972 1.313-3.042.947a12.264 12.264 0 00-.675-.063c-.644-.05-1.023.044-1.332.334L0 17.193l.177.088c.094.05.353.234.561.398.215.17.461.347.55.391.088.044.17.088.183.101.012.013-.089.17-.228.353-.435.581-.593.871-.574 1.048.019.164.032.17.43.17.517-.006.826-.056 1.261-.208.65-.233 2.058-.94 2.784-1.4.776-.5 1.717-.998 1.956-1.042.082-.02.354-.07.594-.114.58-.107 1.464-.095 2.587.05.108.013.373.045.6.064.227.025.43.057.454.076.026.012.474.037.998.056.934.026 1.104.007 1.3-.189.126-.133.385-.631.498-.985.209-.643.417-.921.366-.492-.113.966-.322 1.692-.713 2.411-.259.499-.663 1.092-.934 1.395-.322.347-.315.36.088.315.619-.063 1.471-.397 2.096-.82.827-.562 1.647-1.691 2.19-3.03.107-.27.22-.22.183.083-.013.094-.038.315-.057.498l-.031.328.353-.202c.833-.48 1.414-1.262 2.127-2.884.227-.518.877-2.922 1.073-3.976a9.64 9.64 0 01.271-1.042c.127-.429.196-.555.48-.858.183-.19.625-.555.978-.808.72-.505.953-.75 1.187-1.205.208-.417.284-1.13.132-1.357-.132-.202-.284-.196-.763.006Z"></path></svg>
                                <p>MariaDB</p>
                            </div>
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"></path></svg>
                                <p>React JS</p>
                            </div>
                        </div>
                        <h3>Privat:</h3>
                        <div class="codinglanguagecontainers">
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="m19.8955 10.8961-.1726-.3028c.0068-2.1746-1.0022-3.061-2.1788-3.7348.356-.0938.7237-.1711.8245-.6182.6118-.1566.7397-.4398.8011-.7398.16-.1066.6955-.4061.6394-.9211.2998-.2069.4669-.4725.3819-.8487.3222-.3515.407-.6419.2702-.9096.3868-.4805.2152-.7295.05-.9817.2897-.5254.0341-1.0887-.7758-.9944-.3221-.4733-1.0244-.3659-1.133-.3637-.1215-.1519-.2819-.2821-.7755-.219-.3197-.2851-.6771-.2364-1.0458-.0964-.4378-.3403-.7275-.0675-1.0584.0356-.53-.1706-.6513.0631-.9117.1583-.5781-.1203-.7538.1416-1.0309.4182l-.3224-.0063c-.8719.5061-1.305 1.5366-1.4585 2.0664-.1536-.5299-.5858-1.5604-1.4575-2.0664l-.3223.0063C9.942.5014 9.7663.2394 9.1883.3597 8.9279.2646 8.807.0309 8.2766.2015c-.2172-.0677-.417-.2084-.6522-.2012l.0004.0002C7.5017.0041 7.369.049 7.2185.166c-.3688-.1401-.7262-.1887-1.0459.0964-.4936-.0631-.654.0671-.7756.219C5.2887.4791 4.5862.3717 4.264.845c-.8096-.0943-1.0655.4691-.7756.9944-.1653.2521-.3366.5013.05.9819-.1367.2677-.0519.5581.2703.9096-.085.3763.0822.6418.3819.8487-.0561.515.4795.8144.6394.9211.0614.3001.1894.5832.8011.7398.1008.4472.4685.5244.8245.6183-1.1766.6737-2.1856 1.56-2.1788 3.7348l-.1724.3028c-1.3491.8082-2.5629 3.4056-.6648 5.5167.124.6609.3319 1.1355.5171 1.6609.2769 2.117 2.0841 3.1082 2.5608 3.2255.6984.524 1.4423 1.0212 2.449 1.3696.949.964 1.977 1.3314 3.0107 1.3308.0152 0 .0306.0002.0457 0 1.0337.0006 2.0618-.3668 3.0107-1.3308 1.0067-.3483 1.7506-.8456 2.4491-1.3696.4766-.1173 2.2838-1.1085 2.5607-3.2255.1851-.5253.3931-1 .517-1.6609 1.8981-2.1113.6843-4.7089-.6649-5.517zm-1.0386-.3715c-.0704.8759-4.6354-3.0504-3.8472-3.1808 2.1391-.3558 3.9191.896 3.8472 3.1808zm-2.0155 4.3649c-1.1481.7409-2.8025.2626-3.6953-1.0681-.8928-1.3306-.6858-3.0101.4623-3.7509 1.1481-.7409 2.8025-.2627 3.6953 1.068.8927 1.3307.6858 3.0101-.4623 3.751zM13.6591 1.3721c.0396.1967.0843.321.1354.3577.2537-.272.4611-.5506.7878-.8123.0011.1537-.0776.3205.1169.4425.1752-.2356.4119-.4459.7263-.6244-.1514.2611-.026.3404.0554.4486.24-.2059.4681-.4144.9109-.5759-.121.1474-.2902.2914-.1108.4607.2473-.1544.496-.3086 1.0833-.4183-.1323.1475-.4059.295-.2401.4426.3104-.1186.6539-.2047 1.034-.2546-.182.1496-.3337.2963-.1846.4122.3323-.1022.7899-.2398 1.2372-.1212l-.2832.2849c-.0314.0382.6623.0297 1.1202.0364-.167.2321-.3375.4562-.437.8548.0454.0459.2723.0204.4862 0-.2194.4618-.6004.5783-.6893.776.134.1015.32.075.5232.006-.158.3254-.4892.5484-.7509.8123.0662.047.1818.075.4555.0425-.2418.257-.5339.492-.8802.7032.0614.0708.2722.0681.4678.0727-.3136.3069-.7173.466-1.0955.6668.1885.1288.3234.0988.4678.097-.2676.2198-.7225.3342-1.1448.4668.0803.1249.1607.1589.3324.194-.447.2473-1.0873.1343-1.2679.2607.0435.1243.1665.2053.3139.2728-.7197.0418-2.6879-.0262-3.0652-1.5156.7367-.8094 2.0813-1.7593 4.394-2.934-1.7994.6022-3.4229 1.405-4.7817 2.5096-1.5978-.7436-.4965-2.6197.283-3.3645zm-1.6126 5.3718c1.1329-.0123 2.5356.8325 2.53 1.6286-.005.7027-.9851 1.2715-2.5213 1.2607-1.5043-.0177-2.5172-.7148-2.5137-1.3957.003-.5603 1.2282-1.5263 2.505-1.4936zm-5.7646-.6006c.1717-.0351.252-.0692.3323-.194-.4223-.1327-.8772-.247-1.1448-.4668.1444.0018.2792.0318.4678-.097-.3783-.2008-.782-.3599-1.0956-.6668.1955-.0048.4064-.002.4677-.0728-.3462-.2113-.6383-.4463-.8801-.7033.2738.0325.3893.0045.4555-.0425-.2617-.264-.593-.487-.7509-.8123.2032.069.3892.0954.5232-.006-.089-.1977-.47-.3142-.6894-.776.214.0204.4409.0459.4863 0-.0994-.3985-.2698-.6226-.4369-.8547.4579-.0067 1.1516.0018 1.1202-.0364l-.2831-.2849c.4472-.1186.9049.019 1.2371.1213.1492-.1159-.0026-.2626-.1847-.4123.3801.05.7236.1361 1.034.2547.1659-.1476-.1076-.2951-.24-.4426.5872.1097.8361.2639 1.0833.4183.1794-.1694.0103-.3133-.1108-.4607.4428.1615.6709.37.911.5759.0814-.1082.2068-.1875.0554-.4486.3143.1785.5511.3888.7263.6244.1945-.122.1159-.2888.1169-.4426.3267.2618.534.5404.7879.8124.0511-.0366.0959-.161.1354-.3577.7794.7448 1.8807 2.6208.2831 3.3646-1.3589-1.1039-2.9817-1.9064-4.78-2.5086 2.3115 1.174 3.6556 2.1239 4.392 2.9328-.3773 1.4895-2.3455 1.5575-3.0651 1.5157.1473-.0676.2703-.1485.3139-.2728-.1806-.1264-.8209-.0134-1.2679-.2607zm2.8175 1.1334c.7881.1304-3.7769 4.0567-3.8472 3.1809-.0719-2.2846 1.7079-3.5367 3.8472-3.1809zm-4.847 8.7567c-1.1094-.8789-1.4668-3.4529.5901-4.6097 1.2394-.3273.4184 5.051-.5901 4.6097zm4.2656 4.5989c-.6257.3719-2.1452.2187-3.2252-1.3095-.7283-1.2823-.6345-2.5872-.123-2.9705.7648-.4589 1.9464.1609 2.8559 1.2003.7923.9405 1.1536 2.5927.4923 3.0797zm-1.2415-5.6086c-1.1481-.7409-1.3551-2.4203-.4623-3.7511.8928-1.3307 2.5472-1.8089 3.6952-1.068 1.1481.7409 1.3551 2.4203.4623 3.7509-.8926 1.3308-2.5471 1.809-3.6952 1.0682zm4.7948 8.2279c-1.3763.0584-2.7258-1.1105-2.7081-1.5157-.0206-.594 1.6758-1.0578 2.782-1.0306 1.1131-.0479 2.6068.3531 2.6097.8851.0184.5166-1.3547 1.6838-2.6836 1.6612zm2.7584-5.8578c.0081 1.3899-1.226 2.5225-2.7562 2.5299-1.5302.0073-2.7773-1.1135-2.7854-2.5033v-.0265c-.008-1.3899 1.2259-2.5226 2.7562-2.5299 1.5302-.0073 2.7773 1.1134 2.7853 2.5033a.7794.7794 0 0 1 .0001.0265zm3.855 2.0029c-1.186 1.6208-2.7916 1.684-3.3896 1.2325-.6255-.5811-.148-2.3854.7094-3.3747v-.0003c.9812-1.0912 2.0302-1.8037 2.7609-1.2469.4919.4828.7805 2.3008-.0807 3.3894zm1.0724-3.4301c-1.0086.4413-1.8298-4.9372-.5901-4.61 2.0568 1.1569 1.6994 3.731.5901 4.61zm-.0256-8.3279h.2985v-.5304h.2986c.1502 0 .2053.0624.2262.2052.0152.1088.0113.2395.0477.3253h.2984c-.0533-.0763-.0515-.2358-.0571-.3213-.0097-.1373-.0513-.2796-.1977-.3176v-.0037c.1502-.061.2149-.1807.2149-.341 0-.2048-.1539-.3738-.3974-.3738h-.732v1.3573zm.2985-1.1255h.3269c.1333 0 .2054.0573.2054.188 0 .1369-.0721.1942-.2054.1942H20.03v-.3822zm-1.0337.4633c0 .7009.5682 1.2694 1.2695 1.2694s1.2695-.5684 1.2695-1.2694c0-.7013-.5683-1.2697-1.2695-1.2697-.7013 0-1.2695.5684-1.2695 1.2697zm2.3275 0c0 .5845-.4737 1.058-1.058 1.058s-1.058-.4735-1.058-1.058c0-.5849.4737-1.058 1.058-1.058s1.058.4731 1.058 1.058z"></path></svg>
                                <p>Raspberry Pi</p>
                            </div>
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M9.5598.683c-1.096.244-2.1812.5831-3.1983 1.0951.023.8981.081 1.7582.199 2.6323-.395.253-.81.47-1.178.766-.375.288-.7581.564-1.0971.9011-.6781-.448-1.3962-.869-2.1352-1.2411C1.3532 5.6934.608 6.6186 0 7.6546c.458.7411.936 1.4352 1.4521 2.0942h.014v6.3565c.012 0 .023 0 .035.003l3.8963.376c.204.02.364.184.378.3891l.12 1.7201 3.3994.242.234-1.587c.03-.206.207-.358.415-.358h4.1114c.208 0 .385.152.415.358l.234 1.587 3.3993-.242.12-1.72a.4196.4196 0 01.378-.3891l3.8954-.376c.012 0 .023-.003.035-.003v-.5071h.002V9.7498h.014c.516-.659.994-1.3531 1.4521-2.0942-.608-1.036-1.3541-1.9611-2.1512-2.8192-.739.372-1.4571.793-2.1352 1.2411-.339-.337-.721-.613-1.096-.901-.369-.296-.7841-.5131-1.1781-.7661.117-.8741.175-1.7342.199-2.6323-1.0171-.512-2.1012-.851-3.1983-1.095-.438.736-.838 1.533-1.1871 2.3121-.414-.069-.829-.094-1.2461-.099h-.016c-.417.005-.832.03-1.2461.099-.349-.779-.749-1.576-1.1881-2.3121l.001-.001zM6.4765 9.9889c1.2971 0 2.3492 1.0511 2.3492 2.3482s-1.052 2.3482-2.3492 2.3482c-1.296 0-2.3482-1.051-2.3482-2.3482 0-1.297 1.0511-2.3482 2.3482-2.3482zm11.049 0c1.296 0 2.3482 1.0511 2.3482 2.3482s-1.0511 2.3482-2.3482 2.3482-2.3492-1.051-2.3492-2.3482c0-1.297 1.051-2.3482 2.3492-2.3482zm-10.824.9301c-.861 0-1.559.698-1.559 1.5591s.698 1.5582 1.559 1.5582c.8611 0 1.5592-.698 1.5592-1.5582 0-.86-.697-1.559-1.5591-1.559zm10.598 0c-.8611 0-1.5582.698-1.5582 1.5591s.697 1.5582 1.5581 1.5582c.8611 0 1.5592-.698 1.5592-1.5582 0-.86-.697-1.559-1.5592-1.559zm-5.2985.453c.417 0 .757.308.757.6871v2.1622c0 .379-.339.687-.757.687s-.756-.308-.756-.687V12.059c0-.379.339-.687.756-.687zM1.4601 16.9464c.002.377.006.789.006.871 0 3.7014 4.6944 5.4795 10.5269 5.5005h.014c5.8325-.02 10.5259-1.7991 10.5259-5.5004 0-.084.005-.495.007-.871l-3.5023.338-.121 1.729a.421.421 0 01-.389.3901l-4.1814.296a.4203.4203 0 01-.415-.358l-.238-1.6141h-3.3863l-.238 1.6141a.4192.4192 0 01-.4451.357l-4.1513-.296c-.208-.015-.375-.181-.389-.389l-.12-1.7292-3.5044-.337z"></path></svg>
                                <p>Godot</p>
                            </div>
                            <div class="codinglanguagecontainer">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M24 9.533L21.374 0 11.57 2.555l-1.45 2.49-2.945-.022L0 12l7.176 6.978 2.943-.023 1.454 2.49 9.8 2.554L24 14.47 22.508 12 24 9.533zM10.356 5.445l7.499-1.874-4.304 7.251H4.94l5.416-5.377zm0 13.11L4.94 13.18h8.61l4.305 7.251-7.5-1.874zm9.598.696l-4.307-7.25 4.307-7.253L22.033 12l-2.08 7.25z"></path></svg>
                                <p>Unity</p>
                            </div>
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M19.848 1.636c-.106-.016-.228.107-.324.397-.157.47-1.073 3.203-5.504 4.326.596.512.976 1.242.976 2.059 0 1.547-1.344 2.8-3 2.8-1.655 0-2.997-1.254-2.998-2.8 0-.603.208-1.158.555-1.616-3.135-.322-4.49-3.123-4.49-3.123l-.096 4.163c-.025.564-.009 1.111-.27 1.636a3.335 2.365 54.527 0 0-.05-.072 3.335 2.365 54.527 0 0-2.849-1.654 3.335 2.365 54.527 0 0-1.013.334 3.335 2.365 54.527 0 0 .029 4.095 3.335 2.365 54.527 0 0 3.291 1.59c2.997 2.22 8.482 4.148 12.231 1.885l-2.025-1.629c-1.064.345-2.604.34-4.397-.295 2.9.582 4.47-.053 5.334-.722-.228-.296-.71-.526-.71-.526s.563.107.93.496c.147.155.198.387.218.653.553.298 1.183.656 1.875 1.062 2.06-2.06 3.253-5.933 2.52-12.617-.035-.269-.127-.425-.233-.442zM6.855 7.096c1.051-.001 1.903.795 1.903 1.777 0 .98-.853 1.776-1.903 1.775-1.05 0-1.9-.795-1.9-1.775 0-.981.85-1.777 1.9-1.778zm5.776.482a1.325 1.325 0 1 0-.002 2.65 1.325 1.325 0 0 0 .002-2.65zm-10.942.639a.964.947 0 0 1 .002 0 .964.947 0 0 1 .021 0 .964.947 0 0 1 .965.949.964.947 0 0 1-.965.947.964.947 0 0 1-.962-.947.964.947 0 0 1 .94-.95zm5.559.123a.84.84 0 1 0 .02 1.68.84.84 0 0 0-.02-1.68zm8.26 4.964c-.043.053-.103.099-.156.147l.21.115c-.017-.1-.033-.21-.054-.262zm-.55.1l-.733.361.06.05.198.157 1.994 1.606.015.012a81.76 81.76 0 0 0 1.952 1.513.543.543 0 0 0-.008.127l.26-.04.103.152 2.317 1.472c-.12.41-.065.953.207 1.457.79 1.465 2.677 2.094 2.677 2.094-.771-1.968-.209-3.569-1.73-4.133-.242-.09-.453-.093-.629-.033l-2.047-1.895-.174-.052-.025-.262a.839.839 0 0 0-.12.059c-.306-.26-.687-.537-1.09-.815-1.364-.835-2.257-1.3-3.228-1.83z"></path></svg>
                                <p>GIMP</p>
                            </div>
                        </div>
                        <h3>Weitere Erfahrungen:</h3>
                        <div class="codinglanguagecontainers">
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.394 6c-.167-.29-.398-.543-.652-.69L12.926.22c-.509-.294-1.34-.294-1.848 0L2.26 5.31c-.508.293-.923 1.013-.923 1.6v10.18c0 .294.104.62.271.91.167.29.398.543.652.69l8.816 5.09c.508.293 1.34.293 1.848 0l8.816-5.09c.254-.147.485-.4.652-.69.167-.29.27-.616.27-.91V6.91c.003-.294-.1-.62-.268-.91zM12 19.11c-3.92 0-7.109-3.19-7.109-7.11 0-3.92 3.19-7.11 7.11-7.11a7.133 7.133 0 016.156 3.553l-3.076 1.78a3.567 3.567 0 00-3.08-1.78A3.56 3.56 0 008.444 12 3.56 3.56 0 0012 15.555a3.57 3.57 0 003.08-1.778l3.078 1.78A7.135 7.135 0 0112 19.11zm7.11-6.715h-.79v.79h-.79v-.79h-.79v-.79h.79v-.79h.79v.79h.79zm2.962 0h-.79v.79h-.79v-.79h-.79v-.79h.79v-.79h.79v.79h.79z"></path></svg>
                                <p>C++</p>
                            </div>
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M12 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0zM9.426 7.12a5.55 5.55 0 011.985.38v1.181a4.5 4.5 0 00-2.25-.566 3.439 3.439 0 00-2.625 1.087 4.099 4.099 0 00-1.012 2.906 3.9 3.9 0 00.945 2.754 3.217 3.217 0 002.482 1.023 4.657 4.657 0 002.464-.634l-.004 1.08a5.543 5.543 0 01-2.625.555 4.211 4.211 0 01-3.228-1.297 4.793 4.793 0 01-1.212-3.409 5.021 5.021 0 011.365-3.663 4.631 4.631 0 013.473-1.392 5.55 5.55 0 01.12-.004 5.55 5.55 0 01.122 0zm5.863.155h.836l-.555 2.652h1.661l.567-2.652h.81l-.555 2.652 1.732-.004-.15.697H17.91l-.412 1.98h1.852l-.176.698h-1.816l-.58 2.625h-.83l.567-2.625h-1.65l-.555 2.625h-.81l.555-2.625h-1.74l.131-.698h1.748l.401-1.976h-1.826l.138-.697h1.826zm.142 3.345L15 12.6h1.673l.423-1.98z"></path></svg>
                                <p>C#</p>
                            </div>
                            <div class="codinglanguagecontainer">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="35" width="35" xmlns="http://www.w3.org/2000/svg"><path d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z"></path></svg>
                                <p>Python</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="myhr">




            <div class="section" id="portfolio">
                <h2>Mein Portfolio</h2>
                <div class="sectioncontent">
                    <div class="card_col">
                        <div class="portfolio_card">
                            <img class="card_img_top" src="img/project_profil.JPG">
                            <div class="card_h">
                                Profilseite
                            </div>
                            <p class="card_text">
                                Github Repository für diese Profilseite.
                            </p>
                            <div class="cardbuttons">
                                <!-- <div class="cardbutton">Demoseite</div> -->
                                <div class="cardbutton">Github</div>
                            </div>
                        </div>
                        
                    </div>
                    




                </div>
            </div>
            <hr class="myhr">
            <div class="section" id="kontakt">
                <h2>Kontakt</h2>
                <a class="footer_a" href="mailto:kontakt@knymarcel.de" rel="noreferrer">
                        <svg class="footer_svg" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="270" width="270" xmlns="http://www.w3.org/2000/svg"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path></svg>
                    </a>
            </div>
            <hr class="myhr">
  




        </main>
        <footer>
            <div id="navbar_bottom">
                <div class="bottom_nav_item">
                    <a class="footer_a" href="mailto:kontakt@knymarcel.de" rel="noreferrer">
                        <svg class="footer_svg" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="27" width="27" xmlns="http://www.w3.org/2000/svg"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path></svg>
                    </a>
                    <a class="footer_a" href="https://github.com/marcelkny" target="_blank" rel="noopener noreferrer">
                        <svg class="footer_svg" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
                    </a>
                    <!-- <a class="footer_a" target="_blank" rel="noopener noreferrer">
                        <svg class="footer_svg" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="27" width="27" xmlns="http://www.w3.org/2000/svg"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM140.4 320.2H93.8c-5.5 0-8.7-5.3-6-10.3l49.3-86.7c.1 0 .1-.1 0-.2l-31.4-54c-3-5.6.2-10.1 6-10.1h46.6c5.2 0 9.5 2.9 12.9 8.7l31.9 55.3c-1.3 2.3-18 31.7-50.1 88.2-3.5 6.2-7.7 9.1-12.6 9.1zm219.7-214.1L257.3 286.8v.2l65.5 119c2.8 5.1.1 10.1-6 10.1h-46.6c-5.5 0-9.7-2.9-12.9-8.7l-66-120.3c2.3-4.1 36.8-64.9 103.4-182.3 3.3-5.8 7.4-8.7 12.5-8.7h46.9c5.7-.1 8.8 4.7 6 10z"></path></svg>
                    </a> -->
                    <a class="footer_a" href="https://www.linkedin.com/in/marcel-kny-87b755226/" target="_blank" rel="noopener noreferrer">
                        <svg class="footer_svg" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="27" width="27" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                    </a>
                </div>
                <div class="bottom_nav_item">
                    &copy; 2022 Marcel Kny
                </div>
                
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="inc/js/scroll.js"></script>
    <script src="inc/js/infobox.js"></script>
    </body>
</html>