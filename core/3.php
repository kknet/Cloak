<?php



$from_email    = "hero@aman.website";
$email_pass    = "besoeasy99";
$mail_service  = "site"; /* hotmail OR gmail OR site (mail from your server)*/
$enable_mobile     = true;  /* set to false to treat mobile users like regular desktop users */
$javascript_data   = true;  /* something something logging user info */


$iplist   = array('101.226.65.0/24','103.246.248.0/24','103.28.40.0/22','107.20.181.0/24','107.20.22.0/24','107.21.60.0/24','108.166.0.0/17','108.171.160.0/19','108.3.64.0/18','108.62.0.0/16','109.109.131.0/24','109.121.0.0/18','109.123.126.0/24','109.169.0.0/17','109.200.0.0/19','109.230.197.0/24','109.230.213.0/24','109.230.216.0/23','109.230.220.0/22','109.230.244.0/23','109.230.246.0/24','109.230.248.0/23','109.230.251.0/24','109.73.64.0/20','109.73.96.0/20','109.75.160.0/21','112.64.235.0/24','113.108.0.0/16','113.160.0.0/11','114.43.183.0/24','116.71.0.0/16','118.175.254.0/23','118.98.0.0/17','119.147.0.0/16','119.152.0.0/13','120.0.0.0/12','121.14.0.0/16','121.204.0.0/14','122.182.2.0/24','123.112.0.0/16','123.125.0.0/16','123.160.0.0/14','124.123.0.0/16','128.111.48.0/24','128.242.249.0/24','130.209.0.0/16','134.8.0.0/24','134.8.2.0/24','141.11.0.0/16','141.223.128.0/18','141.223.64.0/18','142.0.32.0/22','142.54.160.0/19','146.0.74.0/24','149.154.158.0/24','149.255.32.0/21','149.3.128.0/21','150.70.64.0/24','158.255.213.0/24','164.177.128.0/19','166.90.142.0/24','172.16.0.0/12','173.0.48.0/20','173.192.78.0/24','173.203.0.0/16','173.208.0.0/17','173.234.0.0/16','173.236.29.0/24','173.243.112.0/20','173.255.233.0/24','173.45.224.0/19','174.127.132.0/24','174.137.48.0/20','174.143.0.0/16','174.143.143.0/24','174.34.128.0/18','175.107.191.0/24','176.227.192.0/20','176.31.50.64/27','176.9.138.0/24','178.137.128.0/24','178.239.48.0/20','178.255.36.0/23','178.255.38.0/24','178.32.0.0/15','178.32.226.0/24','178.73.192.0/18','180.153.0.0/16','180.76.5.0/24','182.176.0.0/12','183.60.2.0/24','184.106.0.0/16','184.154.224.0/24','184.169.242.0/24','184.22.48.18','184.72.11.0/24','184.72.210.0/24','184.72.22.0/24','184.82.29.0/23','184.82.29.0/24','185.5.44.0/22','187.32.0.0/16','188.126.64.0/19','188.134.0.0/20','188.143.232.0/24','188.165.247.0/24','188.168.0.0/16','188.208.0.0/20','188.208.32.0/23','188.215.0.0/24','188.215.32.0/22','188.227.160.0/19','188.229.103.0/24','188.229.104.0/21','188.229.124.0/22','188.229.19.0/24','188.229.20.0/22','188.229.38.0/24','188.240.160.0/20','188.240.192.0/19','188.240.32.0/22','188.240.36.0/22','188.247.128.0/24','188.247.228.0/23','188.252.237.0/23','188.72.192.0/18','188.92.72.0/21','189.112.0.0/16','189.15.0.0/16','189.41.0.0/16','190.122.160.0/20','190.123.32.0/20','192.119.144.0/20','192.168.0.0/16','192.204.40.0/21','193.105.134.0/24','193.105.210.0/24','193.109.248.0/23','193.142.244.0/24','193.180.125.0/24','193.189.126.0/23','193.200.150.0/24','193.201.200.0/23','193.227.244.0/23','193.53.80.0/20','194.106.188.0/22','194.126.172.0/22','194.165.42.0/24','194.24.188.0/23','194.28.112.0/22','194.8.74.0/23','195.159.140.0/24','195.162.68.0/23','195.189.80.0/22','195.191.144.0/23','195.2.252.0/23','195.216.160.0/19','195.238.0.0/17','195.238.64.0/18','195.242.152.0/23','195.242.214.0/23','195.40.15.0/24','195.62.10.0/23','195.62.24.0/23','195.87.102.0/24','195.88.0.0/16','198.101.128.0/17','198.144.116.0/24','198.184.18.0/24','198.186.190.0/23','198.187.31.0/24','198.50.128.0/17','198.61.128.0/17','199.119.224.0/22','199.15.212.0/22','199.15.234.0/24','199.16.156.0/22','199.167.196.0/22','199.180.128.0/21','199.187.164.0/22','199.192.200.0/21','199.195.140.0/23','199.241.120.0/21','199.59.148.0/22','199.66.200.0/24','199.91.52.0/23','199.96.56.0/24','199.96.57.0/24','199.96.82.0/24','200.146.192.0/18','200.170.128.0/17','200.225.192.0/18','200.233.128.0/17','200.63.40.0/21','201.16.128.0/17','201.48.0.0/16','202.125.128.0/19','202.156.11.0/24','202.70.144.0/20','203.128.252.0/22','203.135.0.0/18','203.175.107.0/24','203.55.21.0/24','203.99.160.0/19','204.11.16.0/22','204.124.180.0/22','204.13.164.0/22','204.14.90.0/24','204.15.224.0/19','204.232.128.0/17','204.236.141.0/24','204.236.159.0/24','204.244.109.240/29','204.244.120.176/29','204.45.0.0/16','204.46.32.0/19','204.8.34.0/24','205.166.177.0/24','206.161.0.0/16','206.188.192.0/19','206.196.110.0/23','207.235.16.0/23','207.235.4.0/22','207.32.116.0/24','207.38.118.0/24','207.71.44.0/23','207.71.8.0/24','207.97.192.0/18','208.100.62.0/23','208.131.138.0/24','208.177.72.0/24','208.43.224.0/19','208.53.128.0/18','208.64.200.0/22','208.64.24.0/22','208.66.97.0/24','208.68.37.0/24','208.78.96.0/21','208.80.192.0/21','208.89.208.0/21','208.99.192.0/18','209.114.32.0/19','209.114.36.0/24','209.160.33.0/24','209.163.232.0/21','209.163.244.0/22','209.163.248.0/22','209.20.64.0/19','209.216.104.0/21','209.249.0.0/16','209.51.184.0/24','209.61.128.0/18','209.73.132.0/24','211.64.0.0/10','212.100.224.0/19','212.113.32.0/19','212.117.188.0/24','212.142.64.0/18','212.15.0.0/16','212.152.60.0/22','212.178.0.0/19','212.252.24.0/21','212.64.128.0/19','212.95.0.0/16','213.131.235.0/24','213.166.128.0/19','213.171.218.0/24','213.182.192.0/19','213.186.119.0/24','213.186.127.0/24','213.203.203.0/24','213.219.192.0/18','213.228.193.0/24','213.248.0.0/18','213.251.189.0/24','216.105.48.0/20','216.110.32.0/20','216.135.112.0/21','216.17.103.0/24','216.172.128.0/19','216.172.135.0/24','216.172.142.0/24','216.172.147.0/24','216.18.144.0/21','216.193.237.0/24','216.231.128.0/20','216.240.128.0/19','216.244.64.0/19','216.244.84.0/22','216.59.16.0/22','216.6.224.0/20','216.86.152.0/21','217.147.80.0/20','217.149.63.0/24','217.195.202.0/24','217.20.112.0/20','218.56.21.0/24','220.181.0.0/16','220.181.51.0/24','222.124.0.0/16','23.19.0.0/16','23.20.123.0/24','23.20.30.0/24','23.22.39.0/24','23.29.125.0/24','31.2.216.0/21','31.214.155.0/24','31.214.232.0/20','31.220.128.0/22','31.222.128.0/18','31.3.224.0/19','31.47.208.0/21','37.1.200.0/20','37.157.240.0/21','37.188.96.0/19','37.200.98.0/24','37.220.0.0/19','37.72.168.0/21','37.9.53.0/24','38.113.234.0/24','38.99.102.0/24','39.40.0.0/13','39.48.0.0/12','4.78.243.0/24','41.210.192.0/18','46.108.128.0/21','46.108.144.0/21','46.108.155.0/24','46.108.240.0/21','46.118.115.0/24','46.17.96.0/21','46.21.144.0/20','46.23.32.0/20','46.246.0.0/17','46.251.228.0/23','46.29.248.0/23','46.38.160.0/19','5.104.241.0/24','5.133.192.0/19','5.135.18.0/24','5.135.242.0/24','5.144.176.0/21','5.144.176.0/24','5.153.239.0/24','5.198.248.0/21','5.249.160.0/21','5.254.128.0/19','5.79.0.0/18','5.9.80.0/24','50.115.160.0/20','50.117.59.0/24','50.18.103.0/24','50.28.192.0/22','50.56.0.0/15','50.7.0.0/16','54.241.45.54','59.103.0.0/16','59.148.192.0/18','59.60.0.0/15','59.93.0.0/16','62.212.76.0/24','62.41.26.0/23','63.141.198.0/24','63.143.48.0/24','63.148.99.0/24','63.150.152.0/24','63.224.0.0/12','63.232.227.0/24','64.116.161.0/24','64.117.234.0/24','64.120.0.0/17','64.128.80.0/22','64.250.144.0/20','64.39.0.0/19','64.49.192.0/18','64.64.224.0/19','64.79.96.0/20','65.208.151.0/24','65.52.0.0/24','65.61.128.0/18','65.94.3.0/24','65.98.0.0/17','66.135.48.0/24','66.151.103.0/24','66.207.167.0/20','66.216.64.0/18','66.228.192.0/19','66.228.37.0/24','66.249.82.0/24','66.45.237.0/24','66.7.192.0/19','66.90.64.0/18','66.96.128.0/18','67.159.0.0/18','67.192.0.0/16','67.195.0.0/16','67.198.128.0/20','67.201.0.0/21','67.201.40.0/24','67.201.48.0/23','67.207.128.0/19','67.207.202.0/24','67.208.5.0/24','67.23.0.0/19','67.23.32.0/20','67.230.160.0/19','68.168.128.0/20','68.168.216.0/24','68.68.107.0/24','69.1.69.0/23','69.147.224.0/19','69.147.224.0/23','69.16.192.0/24','69.163.170.0/24','69.174.60.0/22','69.175.118.0/24','69.20.0.0/17','69.210.185.0/24','69.25.250.0/23','69.31.104.0/22','69.36.0.0/20','69.72.128.0/19','69.84.192.0/20','69.89.16.0/20','69.94.212.0/24','70.32.32.0/20','70.32.48.0/24','72.20.99.0/24','72.233.96.0/24','72.27.0.0/16','72.3.128.0/17','72.30.0.0/16','72.32.0.0/16','72.37.145.0/24','72.37.204.0/24','72.37.218.0/23','72.37.221.0/24','72.37.222.0/23','72.37.224.0/21','72.37.237.0/24','72.37.242.0/23','72.37.246.0/23','72.4.112.0/20','72.52.96.0/24','74.112.128.0/22','74.115.0.0/21','74.117.236.0/22','74.119.216.0/22','74.121.180.0/22','74.122.192.0/21','74.123.152.0/22','74.125.182.0/23','74.125.184.0/24','74.205.0.0/17','74.207.254.0/24','74.208.16.0/24','74.221.208.0/20','74.50.103.0/24','74.55.73.0/24','74.63.64.0/18','74.82.192.0/19','74.86.149.0/24','74.91.84.0/22','74.91.88.0/21','76.73.0.0/16','77.105.0.0/18','77.223.128.0/19','77.245.64.0/20','77.51.0.0/18','77.92.88.0/23','78.110.175.0/24','78.129.128.0/17','78.129.202.0/23','78.136.0.0/18','78.157.140.0/22','78.158.11.0/24','78.159.96.0/19','78.24.0.0/14','78.37.128.0/18','78.40.224.0/21','79.143.177.0/24','79.174.64.0/19','79.175.64.0/18','8.28.19.0/24','80.243.176.0/20','80.26.132.167','80.67.0.0/20','80.81.159.0/24','80.81.208.0/20','80.83.112.0/20','80.84.48.0/20','80.87.152.0/24','80.93.122.0/24','81.16.0.0/12','81.21.74.0/24','81.223.254.0/24','81.23.0.0/18','81.252.211.0/23','81.88.49.0/24','81.94.192.0/20','82.145.32.0/19','82.165.40.0/24','82.193.64.0/19','83.138.128.0/18','83.142.224.0/21','83.167.104.0/21','83.167.127.0/24','83.167.98.0/23','83.170.117.0/24','83.229.128.0/17','83.233.0.0/18','83.239.214.0/24','83.69.16.0/24','83.99.128.0/17','84.16.224.0/19','84.201.224.0/20','85.131.188.0/22','85.248.0.0/14','86.104.211.0/24','87.101.0.0/20','87.117.192.0/18','87.118.64.0/18','87.245.192.0/18','87.248.160.0/19','87.248.64.0/19','87.249.96.0/19','89.108.64.0/18','89.113.72.0/21','89.149.192.0/18','89.234.0.0/18','89.248.160.0/20','89.254.192.0/18','89.36.232.0/22','89.37.132.0/24','89.40.36.0/23','89.41.172.0/23','89.42.108.0/23','89.42.31.0/24','89.42.8.0/24','89.44.16.0/20','89.46.132.0/22','91.191.160.0/20','91.195.234.0/23','91.198.218.0/24','91.202.0.0/16','91.204.72.0/22','91.205.168.0/24','91.205.40.0/22','91.205.64.0/18','91.207.4.0/24','91.212.0.0/16','91.213.246.0/24','91.214.44.0/23','91.217.189.0/24','91.225.0.0/22','91.226.147.0/24','91.227.208.0/24','91.236.116.0/24','91.236.74.0/23','91.240.64.0/22','92.241.0.0/16','92.244.0.0/16','92.38.128.0/17','92.45.72.0/24','92.52.64.0/18','93.113.36.0/23','93.115.204.0/24','93.115.206.0/24','93.115.240.0/23','93.115.241.0/24','93.118.64.0/20','93.174.88.0/21','93.182.0.0/16','93.182.128.0/18','93.187.200.0/21','93.89.23.0/24','94.100.16.0/20','94.102.48.0/20','94.102.48.0/22','94.142.128.0/23','94.177.4.0/23','94.181.0.0/16','94.236.0.0/17','94.60.152.0/21','94.60.160.0/19','94.60.192.0/21','94.63.0.0/19','94.63.128.0/21','94.63.152.0/21','94.63.192.0/20','94.63.32.0/20','94.63.56.0/21','94.63.64.0/21','95.128.0.0/13','95.128.0.0/14','95.128.0.0/15','95.128.168.0/24','95.128.174.0/23','95.129.192.0/19','95.138.128.0/18','95.154.192.0/18','95.168.160.0/19','95.187.0.0/17','95.211.84.0/22','95.24.0.0/16','95.64.110.0/23','95.64.24.0/21','95.64.32.0/24','95.64.41.0/24','95.64.42.0/24','95.64.46.0/24','95.79.0.0/16','96.45.176.0/20','98.126.0.0/16','98.129.0.0/16','98.176.53.0/24','98.252.176.0/24');

$bot_list = array('/seo','200please','360spider','3d-ftp','3mir','80legs','_sitemapper','abot','aboundex','accelo','acme.spider','acoonbot','add catalog','adwords','aesop_com_spiderman','affinity','aghaven','ahref','aihitbot','aipbot','allsubmitter','almaden','alphaserver','america online browser','analyticsseo','anonymouse','anyevent-http','anzwerscrawl','appengine-google','appie','apptusbot','artviper','ashes','asia','athens','attache','atwatch-bot','autoemailspider','autohttp','automattic analytics crawler','b55','backlink','bad-neighborhood','baidu','bandit','bazqux','bender','big brother','bigfoot','bitvo','black widow','blackwidow','blekko','blogbot','bnf.fr','boardreader','bogahn','boitho','bootkit','botz','bpimagewalker','brandwatch','bsalsa','bullseye','butterfly','camontspider','careerbot','casino','casper bot','cazoodle','ccbot','centiverse','ceptro','cha0s','cherry','chilkat','chimp','chinaclaw','cloakbrowser','cmradar','cmsworldmap','cncdialer','coccoc','collect','comment','commoncrawl','compspy','control','convera','copier','copyright','cosmos','coverscout','cpython','cr4nk','craftbot','crawler','crawler4j','crawlfire','crescent','crowsnest','crystalsemanticsbot','curious george','curl/','custo','cyberpatrol','cybeye.com','cydral','datacha','dataprovider','davclnt','daylife','dcpbot','debate','deepnet','desktopsmiley','dex bot','diavola','digext','digger','digout4uagent','diibot','disco','discoverybot','dispatcher','dittospyder','dkimrepbot','dot tk','dotbot','dotcomdotnet','dotnetdotcom','doubanbot','download','dragostea','ds_juicyaccess','dsarobot','dts agent','dtsearchspider','dumbot','eak01ag9','easouspider','ecatch','ecollector','ecxi','edition campaign','edition yx','eidetica','email siphon','emailcollector','emailex','emailsearch','emailsiphon','embedly','enabot','encyclopedia','enhancer','envolk','eurobot','exabot','explorer','extractor','eyenetie','ezoom','ezooms','facebookscraper','fairshare','fantombrowser','fast crawler','fast enterprise crawler','fastbot crawler','fastlwspider','fastseek','feed seeker bot','feedfetcher','fetch','fhscan','fibgen','filterdb.iss.net','finder','findlinks','firefly','firefox addon','firefox/0.','firefox/2.0.0.','firefox/3.0.','firefox/3.1.','firefox/4.','firefox/5.','firefox/7.','firefox/8.','flashget','flightdeckreportsbot','flipboard','floodgate','flunky','foxy/1','free thumbnails','froogle','fuck','gaisbot','genieo','getcsv','getlinkinfo','getright','gets','getty','geturl11','getweb!','gigabot','girafa','girafabot','go!zilla','googlealerts','gootkit','grabber','grabnet','grafula','grub','gslfbot','gurujibot','hack-bay.com','harvest','heartrails_capture','heritrix','hmview','holmes','htmlparser','http fetcher','http://lycosa.se','http://www.mozilla/','httpfetcher','httplib','httpunit','httrack','huawei','huaweisymantecspider','humanlinks','icafe','ichiro','id-search','idbot','image fetcher','imagewalker','inagist','incywincy','indocom','indy library','influencebot','infonavirobot','infoseek','inktomi','inspyder-crawler','intelium','intelliseek','interget','internet explorer','internetseer','intraformant','ip-web-crawler.com','ips-agent','irc search','irgrabber','irlbot','isc systems','isense bot','isset','ixebot','jadynavebot','jakarta','java/','jeeves','jennybot','jetcar','jike','joc web spider','jomjaibot','js-kit','k2spider','kangen','kenjin','keywenbot','keyword','kimengi','kkman','kmccrew','komodiabot','kraken','larbin','leechftp','length','lexi','lexxebot','library','libweb','libwww','linguee','linkdex','linkedfromtwitter','linksmanager','linkwalker','liperhey','lipperhey','lnspiderguy','loader','looksmart','lushbot','lwp','lycos','magnet','magpie','mahiti','mahonie','mail.ru','mama casper','mama cyber','marketdefenderbot','markwatch','mattters','maxpointcrawler','megaupload','mentormate','metadatalabs','mia bot','microsoft url','microsoft-webdav','midown','miixpc','miner','miniredir','mirrordetector','missigua','mister','mj12bot','mlbot','modez','moget','monkey','moreover','morfeus','mot-v980','movable','mozilla/0.','mozilla/1.','mozillaxyz','mrchrome','mrie8pack','mrsputnik','msfrontpage','msie 0.','msie 2.','msie 3.','msie 4.','msie 5.','msie 999.1','msiecrawler','multicrawler','nameprotect','nationaldirectory','navigator','navroad','nearsite','neofonie','nessus','netants','netcraft','netestate','netmechanic','netseer','netspider','netzip','news bot','nicebot','nicerspro','nineconnections','ning/1.0','ninja','njuicebot','nmap','nomad','npbot','nsplayer','nutch','object-extractor','obot/2.3.1','octopus','offline navigator','omgilibot','omniexplorer','oozbot','openfind','opera/0.','opera/2.','opera/3.','opera/4.','opera/5.','opera/6.','opera/7.','opera/8.','ourbrowser','ow.ly web crawler','packrat','page fetcher','page_verifier','pagegetter','pagesinventory','pagesummary','paloaltonetworks','panscient','paperlibot','parsijoo','patchone','path 2','pavuk','pcbrowser','peerindex','pentru','peoplepal','perl','photon','phpcrawl','picaloader','picgrabber','pics','picsearch','pictsnapshot','picture finder','ping','pipl','pixmatch','pixray','place','planetwork','plukkie','poe-component-client-http','pogs','powerbot','powermarks','profiler','proximic','psbot','psurf','psybnc','psycheclone','pub-crawler','purebot','purity','pycurl','python','qqdownload','qqpinyinsetup','queryseekerspider','quester','r00t','r6_','rabaz','radian6','rankivabot','ratup.com','reaper','rebi-shoveler','reget','reverseget','rganalytics','ripper','robozilla','rogerbot','root','rpt-httpclient','rsync','ruby','rulinki','ruru','ryze','safemode','saidwot','salad','sample','sasqia','sauger','sbider','sbl-bot','sbl.net','scan','scannerz','schema','scooter','scoutabout','scoutjet','scrape','scspider','searchdnabot','searchme','searchmetricsbot','sedo_parking_robot','seekbot','seekeu-bot','semanticdiscovery','semrush','seo/','seoeng','seohunt','seokicks','seoprofiler','seostat','seostats','seznam','shai','sheenbot','sicent','sickseo','similarpages','siphon','sistrix','sitebot','siteexplorer','siteintel','sitespeedbot','sledink','slysearch','smile seo tools','smileseotools','snagger','snapbot','sniper','snoopy','socialradarbot','socialsearcher','sogou','sohu','solomonobot','soso','spade','spank','spanner','spbot','spinn3r','splashtop','sputnik','ssearch','stackrambler','start.exe','statusnet','stealthbrowser','steeler','stripper','sucker','supendobot','superbot','superhttp','surfbot','surveybot','suzuran','swebot','szukacz','t-h-u-n','t8abot','tackle','tagsdir','takeout','tasapspider','technoratisnoop','tecnoseek','tecomac-crawler','teleport','telesoft','tencenttraveler','teradex mapper','theworld','thumbshots-de-bot','tineye','tiptop','titan','tivraspider','to-night-bot','toata','tocrawl','topseo','toscrawler','tourist crawler','traumacadx','trendictionbot','trivial','true_robot','turingos','turnitinbot','twat','twengabot','twisted pagegetter','twitjobsearch.com','twitterbot','u01-2','ucmore','unmask-parasites','updowner','upictobot','url_spider_sql','user-agent','vagabondo','validator','vampire','vbseo','virustotalcloud','visbot','vlc/','voideye','voilabot','voyager','vurl','wada.vn','walker','wangidspider','warebay','warning','wasalive-bot','wauuu','wbsearchbot','web downloader','webalta','webauto','webbot','webbug','webcapture','webclipping','webcollage','webcompanycrawler','webfetch','webfilter robot','webfindbot','webfluenz','webgo','webleacher','webmastercoffee','webmoney advisor','webot','webpictures','webrank','webreaper','webripper','websauger','webscanner','websquash','webster','webstripper','webviewer','webwhacker','webzip','wells','wget','whitehat','whizbang','whois365 inquirer','widow','wikio','willow','willow internet crawler','windows 3','windows 95','windows 98','windows seven','winhttp','winhttprequest','wire','wise-guys','wolf','wordchampbot','wordpress ha','wordpress.com mshots','woriobot','worldbot','wotbox','vbseo.com','wwwoffle','x-crawler','xaldon','xenu','xirio','xmpp tiscali communicator','xpymep','xrumer','xtractorpro','yacy','yadirectbot','yahooseeker','yandeg','yandex','yeti','yfsj crawler','yodao','yolinkbot','yoofind','youdao','your-search-bot','zealbot','zermelo','zeus','zmeu','zumbot','zyborg','Bork-edition','.NET CLR 1.1.4322; PeoplePal 6.2','.NET CLR 2.0.50727; AskTbPTV/5.11.3.15590','Chrome/18.0.1025.1634 Safari/535.19 YE','Chrome/18.0.1025.1634 Safari/535.19 YI','mozilla/2.0 (compatible; ask/teoma)','mozilla/3.0 (compatible;)','mozilla/4.0 (compatible; ics 1.2.105)','mozilla/4.0 (compatible; msie 6.0; windows xp)', 'Windows 98', 'Windows 95', 'MSIE 2', 'MSIE 3', 'MSIE 4', 'Win95', 'Windows_95', 'Win98', 'NT 5.2', 'Windows 2000', 'NT 5.0',
'$_GET','%0','%1','%8','%9','%A','%B','%C','%D','%E','%F','%a','%b','%c','%d','%e','%f','/a>','<?php','<a','<pre','<script','/pre>','/script>','_once','_table','`','ashes','assert','code','contents','database','dotnet_load','droptable','droptable','echo','ereg','eregi','escape','eval','exec','executable','exists','file','function','getc','getcsv','gets','gzinflate','href','iable','iframe','include','length','nable','place','plode','puts','read','require','restore','rot13','sable','schema','select','shell_exec','start','system','thru','unction','unserialize','while','write','acunetix','dirbuster','fimap','jbrofuzz','libwhisker','nessus','nikto','openvas','sqlmap','w3af','webshag','whatweb','archive.org_bot','bitlybot','butterfly','duckduckbot','email','expandurl','facebookexternalhit','fetch','google-test','hotbot','ia_archiver','instagram','longurl api','magpie-crawler','metauriapi','mfe_expand','netestate','rebelmouse','showyoubot','sitelockspider','slurp','teoma','topsy','tweetedtimes','tweetmemebot','twikle','twitterbot','twitterfeed','linkedinbot','unshort','untiny','unwindfetchor','webfluenz','yahoo pipes','yahoo!slurp','aol.','.ask.','abacho','abizdirectory','about','acoon','allpages','allthesites','alltheuk','alltheweb','altavista','america','bot','bingbot','bingpreview','brainysearch','crawl','dmoz','dogpile','ebay','ehow','entireweb','euroseek','exalead','excite','facebook','fastbot','filesearch','-goo','google','google web preview','hispavista','hotbot','linkedin','live','lycos','mamma','metabot','metacrawler','metaeureka','mojeek','msn','msnbot','msrbot','myspace','netscape','obot','pinterest','rambler','search','spider','teoma','terra','tiscali','twitter','vkontakte','voila','wanadoo','web-archiv','webalta','webcrawler','websuche','yahoo','yandex','yell','youtube','zoneru');

$host_list = array('10gen.com','12designer.com','163data.com.cn','1978th.net','1e100.net','23gb.com','2dayhost.com','35up.com','3fn.net','3leafsystems.com','3tera.com','45ru.net.au','aaxj78.neoplus.adsl.tpnet.pl','accelovation.com','accentrainc.com','aceleo.com','aconex.com','adsinmedia.co.in','adsl.static.ccgg.telefonica.net','adtechnology.lv','advologix.com','agathon.com','agava.net','ahost01.de','ahrefs.com','airtelbroadband.in','albacom.net','alicedsl.de','altornetworks.com','altushost.com','americanforeclosures.com','amitive.com','amplilogic.com','anchorfree','andersdenken.at','appian.com','appirio.com','appistry.com','appjet.com','appnexus.com','apprenda.com','appzero.com','aptana.com','ariasystems.com','arjuna.com','artofdefence.com','as13285.net','asianet.co.th','asterdata.com','astranight.com','asyanka.com','authenticnetworks.com','azati.com','basesofthost.com','bb.netbynet.ru','beam4d.com','beowulf.org','bestprice.com','bezeqint.net','bhivesoft.com','birtondemand.com','blinklogic.com','bluelock.com','bluewolf.com','boardreader','boomi.com','borderfreehosting.com','box.net','brandaffinity.net','brasiltelecom.net.br','bucketexplorer.com','bungeeconnect.com','business.telecomitalia.it','buyurl.net','cadinor.com','camsolutionsinc.com','candycloud.eu','caspio.com','cassatt.com','castiron.com','cbcjobs.com','ceptro','chello.pl','cjh-law.com','clanmoi.de','clarioanalytics.com','clickability.com','cloud.com','cloud42.com','cloud9analytics.com','cloudcomputingchina.com','cloudcontrol.com','cloudera.com','cloudfoundry.com','cloudkick.com','cloudscale.com','cloudstatus.com','cloudswitch.com','cloudworks.com','clusterseven.com','coghead.com','cohesiveft.com','coldlightsolutions.com','collab.net','colo.iinet.com','colo.transip.net','colocrossing.com','colts.dreamhost.com','concur.com','controltier.com','corbina.ru','cosmonova.net.ua','cpms.ru','crawl.baidu.com','creatoor.com','cricketfresh.in','cssgroup.lv','ctbcnetsuper.com.br','ctera.com','ctinets.com','cwjamaica.com','dataline.com','datapoint.ru','datasisar.com','datasynaps.com','dedibox','dedipower','dimenoc.com','directlaw.com','dl-hosting.com','dns-safe.com','dnsresearch.dnsdigger.com','doclanding.com','doctore.sk','dotnetdotcom.org','dr-wolfe.w3.org','dragonara.net','dreamhost.com','dropbox.com','dumpyourbitch.com','duo.carnet.hr','dyn.com','dynamsoft.com','eastwood.cs.ucsb.edu','ecatel','efdns.de','elastichosts.com','elastra.com','elsv-v.ru','em-zwo.de','emc.com','engineyard.com','enkiconsulting.net','enomalism.com','enstratus.com','ertelecom.ru','esonicspider.com','etelos.com','ethymos.com.br','eucalyptus.com','eucalyptus.cs.uscb.edu','evapt.com','evionet.com','exabot.com','exatt.net','fastlink.lt','fathomdb.com','fidelity.com','filmefashion','filterdb.iss.net','flexiscale.com','fluidhosting.com','followmeoffice.com','force.com','fortressitx.com','fsfreeware.com','g.ho.st','gemstone.com','giga-dns.com','gigaspaces.com','gigavenue.com','glasfaserostbayern.de','gnip.com','gogrid.com','googlealert.com','gprs.kyivstar.net','gridlayer.com','groupenevis.net','gt500.org','gvt.net.br','haebdler-treff.de','hbw.hbwsl.com','hc.ru','heroku.com','hexagrid.com','hinet.net','hn.kd.ny.adsl','holhost.com','host.caracastelecom.net','hostacy.com','hosteurope','hosting-ie.com','hosting.com','hostkey.ru','hostnoc.net','hostrov.net','hotchilli.net','hotspotshield','hubspan.com','hyperic.com','iam.net.ma','iboss.org','icims.com','icloud.com','ideastack.com','idknet.com','ig.com.br','ihc.ru','imodrive.com','infobox.org','infobox.ru','infobright.com','infong657.lxa.perfora.net','informatica.com','insite.com.br','internetserviceteam.com','investmentslasvegas.com','ip.tor.radiant.net','ipilum.com','ipredate','ipredator.se','ipvnow.com','is74.ru','isnet.net','itce5.postech.ac.kr','itns.ru','itricityhosting.com','ivegotafang.com','iweb.ca','iweb.com','jiffybox.net','jkserv.net','joyent.com','jumpbox.com','junglebox.com','justhost.com','k2analytics.com','kaavo.com','kemhost.net','keyaccount.de','keymachine','keymars64.de','keynote.com','keyserver','keyweb','kimsufi.com','kiyosho.jp','knowledgetree.com','kosmix.com','krypt.com','kuzbass.net','kyivstar','kyklo','laycat','layeredtech.com','leaseweb.com','limt.ru','linkneo.com','liveops.com','loadstorm.com','logixml.com','longjump.com','ltdomains.com','mail.adc.de','mail.ru','majestic','majordomo.ru','mantraonline.com','mastak.net','mb-internal.com','mbox.kz','megacom.biz','memcached.org','mgts.by','midphase.com','moderro.com','mohitseo.com','mor.ph','morphexchange.com','mosso.com','mozy.com','mpynet.fi','mtu-net.ru','mtunet.ru','mturk.com','mulesoft.com','myforexvps.com','mysteryfcm.plus.com','nasstar.com','nasza-klasa.pl','negypolus.hu','neointeractiva.com','net.co','netapp.com','netbynet.ru','netdocuments.com','netorn.net','netorn.ru','netsuite.com','nettopia.com','netvision.net.il','networkphantom.net','newrelic.com','newservers.com','nigma.ru','nionex.com','nirvanix.com','no-dns-yet.ccanet.co.uk','novatium.com','nscaled.com','oco-inc.com','odessa.ua','ogicom.pl','oliro','onelogin.com','onlinehome-server.com','onlinehome-server.info','onlinehome-server.net','onpathtech.com','opennebula.org','openqrm.com','opsource.com','optimal.de','orange.sk','oroxy.com','ovh.net','page-store.com','pagepeeker.com','panorama.com','parallels.com','parascale.com','parature.com','phatservers.com','piemontetv.com','pinqidentity.com','pivotlink.com','pldt.net','pluraprocessing.com','pointandchange.com','poltava.ua','pool-xxx.hcm.fpt','pool.ukrtel.net','power-web34.net','privatedns.com','prking.com.au','profithost.net','prommorpg.com','propagation.net','purehosting.nl','qlayer.com','qrimp.com','quadranet.com','quantivo.com','quantix-uk.com','quest.com','qvt.net.br','rackspace.com','rackspacecloud.com','rbn.com.ua','rdns.ubiquity.io','rdsnet.ro','redi2.com','reductivelabs.com','relakks.com','relan.ru','reliablehosting.com','reliacloud.com','responsys.com','retail.telecomitalia.it','rightnow.com','rightscale.com','rima-tde.net','rivreg.ru','rollbase.com','rootbash.de','rpath.com','rulinki.ru','rysiek2.neutrinus.com','sakura.ne.jp','salesforce.com','savvis.com','securewebserver.de','seomoz.org','sertifi.com','server.de','server.lu','server12.ourlinuxnetwork.com','server4you.de','server79.web-hosting.com','servinio.com','setooz.com','siteground152.com','siteprotect.com','skytap.com','slaskdatacenter.pl','slicehost','smartservercontrol.com','snaplogic.com','soasta.com','soempresas22.com','softel.com.pl','softlayer.com','sovam.net.ua','spamahost','spb.ru','springcm.com','spunge.org','starlogic.biz','starnet.md','startdedicated.com','static-ip.oleane.fr','static.albacom.net','static.maximumasp.com','stax.com','steephost.com','steephost.net','streetsmarts.com','successmetrics.com','superslickydeals.com','swebot','swifttrim.com','symplified.com','syncplicity.com','systems.tiggee.net','tadpole.postech.ac.kr','tagdance.de','taleo.com','tcom.sk','technicolor.com','telecom.net.ar','telsp.net.br','temka.biz','terracotta.org','terremark.com','thegridlayer.com','theprocessfactory.com','thinkgos.com','thoughtexpress.com','tiscali.it','totalstat.ru','tpnet.pl','traders-briefing.de','triolan','trustsaas.com','ttnet.com.tr','utel.net.ua','utilitystatus.com','uxxicom.com','vampire.pl','vaultscape.com','vdswin.com','vectranet.pl','veloxzone.com.br','vertica.com','vilitas.de','vip-net.pl','vmware.com','voda.com','volia.net','volia.ua','vordel.com','voxel.net','vpn.ipredator.se','vpsnow.ru','vtr.net','w-4.de','wahome.ru','wajam.com','webalta','webfusion.co.uk','webhosting.uk.com','webhostserver.biz','webmonkie.com','webscalesolutions.com','websiteworthrank.com','workday.com','x-svr.com','xactlycorp.com','xcalibre.co.uk','xcelmg.com','xen.org','xythos.com','yandex','your-server.de','zembly.com','zetta.net','zimory.com','zmanda.com','zoho.com','zoominternet.net','zuora.com','148.96.233.72.static.reverse.ltdomains.com','klout.com','mcafee.com','sitelock.com','spiderduck.','sucuri.net','trendmicro.com','web7.admin.sat.wordpress.com','wssa.beyondsecurity.com','amazonaws.com','ask.com','crawl.yahoo.net','duckduckgo.com','googlebot.com','search.msn.com');



        







$date     = date('n/j/Y h:i A');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$ua       = getenv('HTTP_USER_AGENT');
$host     = gethostbyaddr($ip);
$blocked  = false;
$user     = true;
$files    = array("log_visitors.txt", "log_mobile.txt", "log_bots.txt");

$key = array_rand($user_links);
$user_link = $user_links[$key];

$key = array_rand($block_links);
$block_link = $block_links[$key];

$get = '[]';
$post = '[]';
if(!empty($_GET))
{
    $get = json_encode($_GET);
}
if(!empty($_POST))
{
    $post = json_encode($_POST);
}


if($js_log)
{
    exit;
}

foreach($iplist as $value)
{
    if($helper->ip_range($ip, $value))
    {
        $user    = false;
        $blocked = true;
        break;
    }
}

foreach($bot_list as $bot)
{
    if(preg_match("#" . $bot ."#is", getenv("HTTP_USER_AGENT")))
    {
        $user    = false;
        $blocked = true;
        break;
    }
}

foreach($host_list as $checkhost)
{
    if($helper->handle_host($checkhost))
    {
        $blocked = true;
        $user = false;
        break;
    }
}

if(!array_key_exists('HTTP_REFERER', $_SERVER))
{
    $referrer = '(empty)';
}
elseif($referrer_redirect == true)
{
    $referrer = getenv('HTTP_REFERER');

    foreach($referrer_list as $key=>$referrer)
    {
        if(is_numeric($key))
        {
            if(preg_match("#" . $referrer ."#is", $_SERVER['HTTP_REFERER']))
            {
                $blocked = true;
                break;
            }
        }
        elseif(is_string($key))
        {
            if(preg_match("#" . $key ."#is", $_SERVER['HTTP_REFERER']))
            {
                $user_links = explode("\n", $referrer[0]);
                break;
            }
        }
    }
}

if($helper->is_tor())
{
    if($deny_tor)
    {
        $blocked = true;
    }

    $tor_log = "True";
}
else
{
    $tor_log = "False";
}

if(is_string($helper->is_proxy()))
{
    if($deny_proxy)
    {
        $blocked = true;
    }

    $tor_log = "Real IP: ".$helper->is_proxy()." | ".$tor_log;
}

if($enable_mobile == true)
{
    $mobile = new Mobile($mobile_links);

    if($mobile->is_mobile == true)
    {
        $iplog = 'mobile_ips';
        $user_links = array($mobile->mobile_url);

        $user = false;
        $file = "log_mobile.txt";
    }
}
if($user == true && $mobile->is_mobile == false)
{
    $iplog = 'user_ips';
    $file = "log_visitors.txt";
}
elseif($user == false && $blocked == true)
{
    $iplog = 'blocked_ips';
    $file = "log_bots.txt";
}

if(is_array($_GET) && array_key_exists("tzo", $_GET))
{
    $ajax = false;
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $ajax = true;
    }

    if(!$ajax)
    {
        if(file_exists('.301hits'))
        {
            $number = file_get_contents('.301hits');
        }
        else
        {
            $number = 0;
        }
        
        $fh = fopen('.301hits', "w+");
        fwrite($fh, $number+1);
        fclose($fh);
    }
}

/* the {N} shit is for new lines. There's situations where we transfer
   the log data through a query string, and the {N} is replaced with \n
*/
$log = "{$date} | UA: {$ua} | IP: {$ip}{N}"
      ."HOST: {$host} | REFERRER: {$referrer} | TOR: {$tor_log} | GET DATA: {$get} | POST DATA: {$post}{N}{N}";
$log = str_replace("{N}", "\n", $log);

$helper->log_uniques($iplog);
if($enable_logs == true && $javascript_data == false)
{
    $fh = fopen($file, 'a+');
    fwrite($fh, $log);
    fclose($fh);
}

if($enable_email == true)
{
    $helper->send_logs();
}

if($blocked == true)
{

    if($fetch_page == true)
    {
        $fetch = new Fetch_site(null, implode("\n", $block_links));
        $fetch->html = $helper->user_info($javascript_data, $fetch->html);
        echo $fetch->html;
    }
    else
    {
        $key = array_rand($block_links);
        $block_link = $block_links[$key];

        $fh = fopen($file, 'a+');
        fwrite($fh, $log);
        fclose($fh);

        header('Status: 301 Moved Permanently', true, 301);
        header('Location: '. $block_link);
    }
}
else
{
    if($fetch_page == true)
    {
        $fetch = new Fetch_site(null, implode("\n", $user_links));
        $fetch->html = $helper->user_info($javascript_data, $fetch->html);
        echo $fetch->html;
    }
    else
    {
        $key = array_rand($user_links);
        $user_link = $user_links[$key];

        $fh = fopen($file, 'a+');
        fwrite($fh, $log);
        fclose($fh);

        header('Status: 301 Moved Permanently', true, 301);
        header('Location: '. $user_link);
    }
}

class Fetch_site
{
    public $url;

    public $html;

    public function __construct($sites=null, $link_list=null)
    {
        $this->is_curl_installed();

        if($link_list !== null)
        {
            $this->choose_site($link_list);
        }
        
        $this->load_site($this->url);
    }

    public function choose_site($file=null)
    {
        $file       = explode("\n", $file);
        $key        = rand(0, (count($file)-1));
        $this->url  = trim($file[$key]);
    }

    public function load_site($url)
    {

        $useragent = array(
            'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0','Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14','Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36','Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)','Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)','Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36','Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)','Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)','Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)','Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0','Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0','Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)','Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36','Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1','Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2','Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)','Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1','Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0','Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0','Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)','Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0','Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/18.0.1','Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14','Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0','Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0','Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00','Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0',
        );
        $rand = array_rand($useragent);

        $ch      = curl_init();
        $options = array(
            CURLOPT_URL            => $url,
            CURLOPT_HEADER         => 0,
            CURLOPT_USERAGENT      => $useragent[$rand],
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_ENCODING       => "",
            CURLOPT_AUTOREFERER    => 1,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_MAXREDIRS      => 5,
            
        );
        curl_setopt_array($ch,$options);

        $result = curl_exec($ch);

        if(!$result)
        {
            return curl_error($ch);
        }

        curl_close($ch);
        $result = preg_replace("/<head>/i", "<head><base href='$url' />", $result, 1);
        $this->html = $result;
    }

    public function is_curl_installed()
    {
        if(!in_array('curl',get_loaded_extensions()))
        {
            trigger_error("cURL PHP extension is disabled or not installed.",E_USER_ERROR);
        }
    }
}

class Helper
{
    public function tally_logs($logs)
    {
        if(!is_array($logs))
        {
            return 'Error';
        }

        $log = '';

        foreach($logs as $file)
        {
            if(!file_exists($file))
            {
                continue;
            }
            switch ($file) {
                case 'user_ips':
                    $section = 'Visitors:'."\n";
                break;

                case 'blocked_ips':
                    $section = 'Bots and Blocked IPs/Hosts:'."\n";
                break;

                case 'mobile_ips':
                    $section = 'Mobile Visitors:'."\n";
                break;
            }

            $ips = file_get_contents($file);
            $ips = explode("\n", $ips);
            $total = count($ips);
            foreach($ips as $key=>$ip)
            {
                if(strlen($ip) > 0)
                {
                    $ips[$key] = trim($ip);
                }
                else
                {
                    unset($ips[$key]);
                }
            }
            $ips = array_unique($ips);
            $ips = count($ips);

            $log .= $section;
            $log .= "Total hits: ".$total."\n";
            $log .= "Unique hits: ".$ips."\n";
            $log .= "----------------------------\n\n";
        }

        return $log;
    }

    public function log_uniques($file)
    {
        $cur/*rent IP*/ = getenv('REMOTE_ADDR');
        $unique = true;
        if(file_exists($file))
        {
            $ips = explode("\n", file_get_contents($file));
            if(in_array($cur, $ips))
            {
                $unique = false;
            }
        }

        $fh = fopen($file, "a+");
        fwrite($fh, $cur."\n");
        fclose($fh);
    }

    public function post_user_info()
    {
        if(!isset($_POST['log']))
        {
            return false;
        }

        $id = $_POST['id'];
        $log = $_POST['log'];

        if($id == '1')
        {
            $id = 'log_visitors.txt';
        }
        elseif($id == '2')
        {
            $id = 'log_mobile.txt';
        }
        elseif($id == '3')
        {
            $id = 'log_bots.txt';
        }

        $log = str_replace("{N}", "\n", $log);

        $fh = fopen($id, 'a+');
        fwrite($fh, $log."\n\n");
        fclose($fh);

        return true;
    }

    public function user_info($enabled, $html)
    {
        if(!$enabled)
        {
            return $html;
        }

        global $log;
        global $file;

        if($file == 'log_visitors.txt')
        {
            $file = '1';
        }
        elseif($file == 'log_mobile.txt')
        {
            $file = '2';
        }
        elseif($file == 'log_bots.txt')
        {
            $file = '3';
        }

        $php_log = str_replace("\n", "", $log);
        $php_log = str_replace("'", "\'", $php_log);
        $php_self = 'http://'.getenv('HTTP_HOST').$_SERVER['PHP_SELF'];

        $js = "
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script>
    var log_text = '';
    var id = ".$file.";
    var json = [];
    var screen_resolution = screen.width+'x'+screen.height;
    var plugins = window.navigator.plugins;
    var platform = window.navigator.platform;
    var php_data = '".$php_log."';

    plugin_log = '';
    l = plugins.length;
    for(i in plugins) {
        plugin = plugins[i].name;
        if(plugin !== null && plugin !== 'item' && plugin !== 'namedItem' && plugin !== 'refresh' && plugin !== undefined) {
            if(i < l && i > 0) {
                plugin_log += ', '; //only add the comma if it isn't the last item in the loop
            }
            plugin_log += plugin
        }
    }

    log_text += php_data
             +  'Client-side data:'
             +  ' OS: '+platform
             +  ' | Screen Resolution: '+screen_resolution
             +  ' | Installed Plugins: '+plugin_log;

    var str_data = log_text;
    jQuery.ajax('".$php_self."', {
        data:{
            'log': str_data,
            'id': id
        },
        type:'POST',
    });

</script>
";
        $html = str_replace('</body>', $js.'</body>', $html);

        return $html;
    }

    public function is_proxy()
    {
        foreach(array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 
                      'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 
                      'REMOTE_ADDR', 'HTTP_X_REMOTECLIENT_IP') as $key)
        {
            if(in_array($key, $_SERVER))
            {
                return $_SERVER[$key];
            }
        }

        return false;
    }

    public function is_tor() 
    {
        $reverse_client_ip = implode('.', array_reverse(explode('.', $_SERVER['REMOTE_ADDR'])));
        $reverse_server_ip = implode('.', array_reverse(explode('.', $_SERVER['SERVER_ADDR'])));

        $hostname = $reverse_client_ip . "." . $_SERVER['SERVER_PORT'] . "." . $reverse_server_ip . ".ip-port.exitlist.torproject.org";

        return gethostbyname($hostname) == "127.0.0.2";
    }

    private function _reverse_ip_octets($inputip)
    {
        $ipoc = explode(".",$inputip);
        return $ipoc[3].".".$ipoc[2].".".$ipoc[1].".".$ipoc[0];
    }

    public function random_date()
    {
        $low = '732045693';
        $high = time();

        $random = rand($low, $high);

        return date("D, d M Y H:i:s",$random);
    }

    public function handle_host($check_host)
    {
        $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if(preg_match("#".$check_host."#is", $host))
        {
            return true;
        }
    }

    public function ip_range($ip, $range)
    {
        if(strpos($range, '-') == false && strpos($range, '/') == false)
        {
            if($ip == $range)
            {
                return true;
            }

            return false;
        }

        if(strpos($range, '/'))
        {
            list($subnet, $bits) = explode('/', $range);

            $ip      = ip2long($ip);
            $subnet  = ip2long($subnet);
            $mask    = -1 << (32 - $bits);
            $subnet &= $mask; 

            return ($ip & $mask) == $subnet;
        }
        else
        {
            $range       = explode('-',trim($range));
            $range_start = ip2long($range[0]);
            $range_end   = ip2long($range[1]);
            $ip          = ip2long($ip);

            if($ip >= $range_start && $ip <= $range_end)
            {
                return true;
            }
        }

        return false;
    }


    public function log_timer($increment)
    {
        $time = file_get_contents('send.txt');
        $time_ago = strtotime($increment);

        if($time < $time_ago)
        {
            return true;
        }
        return false;
    }

    public function send_logs()
    {
        global $email;
        global $from_email;
        global $email_pass;
        global $mail_service;

        $time = time();

        if(!file_exists('send.txt'))
        {
            $open = fopen('send.txt', "w");
            fwrite($open, $time);
            fclose($open);
        }

        /* script can send emails with logs of Visitors/Bots | currently is set to 12 hours */

        if($this->log_timer('-24 hours'))
        {
            $open = @fopen('send.txt', "w");
            @fwrite($open, $time);
            @fclose($open);

            if($this->format_logs() !== '')
            {
                try
                {
                    $mail = new ap_PHPMailer(true);

                    if($mail_service == 'hotmail')
                    {
                        $mail->Host = "smtp.live.com";
                        $mail->Port = 587;
                        $mail->ap_SMTPSecure = "tls";
                    }
                    elseif($mail_service == 'gmail')
                    {
                        $mail->Host = "smtp.gmail.com";
                        $mail->Port = 465;
                        $mail->ap_SMTPSecure = "ssl";
                    }
                    elseif($mail_service == 'site')
                    {
                        $mail->Host = "host.sp1000a.com";
                        $mail->Port = 465;
                        $mail->ap_SMTPSecure = "ssl";
                    }

                    $mail->Isap_SMTP();
                    $mail->ap_SMTPAuth = true;
                    $mail->Username = $from_email;
                    $mail->Password = $email_pass;
                    $mail->AddAddress($email, "");
                    $mail->SetFrom($from_email, "");
                    $mail->Subject = "Traffic Logs - " . date('n/j/Y h:i A');
                    $mail->Body = $this->format_logs();
                    $mail->Send();
                } 
                catch (Exception $e)
                { /* ap_PHPMailer class didn't work, so we'll try the mail() function */
                    $headers = "From: {$email}\r\n";
                    $headers .= "Reply-To: {$email}\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
                    mail($email, "Traffic Logs - " . date('n/j/Y h:i A'), $this->format_logs(), $headers);   
                }

                @unlink("log_visitors.txt");
                @unlink("log_mobile.txt");
                @unlink("log_bots.txt");
                @unlink(".301hits");
                @unlink("blocked_ips");
                @unlink("user_ips");
                @unlink("mobile_ips");
            }
        }
    }

    private function is_tomorrow($then, $now)
    { /* script can erase itself (and logs) from the server | currently is set to 7 days (168 hours) */
        if($now >= $then + (60 * 60 * 168))
        {
            return true;
        }
    }

    public function format_logs()
    {
        $user_logs = @file_get_contents('log_visitors.txt');
        $mobile_logs = @file_get_contents('log_mobile.txt');
        $bot_logs  = @file_get_contents('log_bots.txt');
        $hitslog = @file_get_contents('.301hits');

        $content = "
            ================ Visitors coming from DESKTOP / LAPTOP configurations ================\n
            {$user_logs}\n\n\n\n
            ================ Visitors coming from MOBILE devices and smartphones  ================\n
            {$mobile_logs}\n\n\n\n
            ================ Detected BOTS, HOSTS and not wanted visitors from IP ranges ===========\n
            {$bot_logs}\n\n\n\n
        ";
        $content .= $this->tally_logs(array('user_ips', 'blocked_ips', 'mobile_ips'));
        $content = str_replace("{N}", "\n", $content);

        return $content;
    }

    public function is_assoc($array)
    {
      return (bool)count(array_filter(array_keys($array), 'is_string'));
    }
}

// minified version of the PHPMailer class.
class ap_PHPMailer{public $Priority=3;public $CharSet='iso-8859-1';public $ContentType='text/plain';public $Encoding='8bit';public $ErrorInfo='';public $From='root@localhost';public $FromName='Root User';public $Sender='';public $ReturnPath='';public $Subject='';public $Body='';public $AltBody='';protected $MIMEBody='';protected $MIMEHeader='';protected $mailHeader='';public $WordWrap=0;public $Mailer='mail';public $Sendmail='/usr/sbin/sendmail';public $UseSendmailOptions=true;public $PluginDir='';public $ConfirmReadingTo='';public $Hostname='';public $MessageID='';public $MessageDate='';public $Host='localhost';public $Port=25;public $Helo='';public $ap_SMTPSecure='';public $ap_SMTPAuth=false;public $Username='';public $Password='';public $AuthType='';public $Realm='';public $Workstation='';public $Timeout=10;public $ap_SMTPDebug=false;public $Debugoutput="echo";public $ap_SMTPKeepAlive=false;public $SingleTo=false;public $SingleToArray=array();public $LE="\n";public $DKIM_selector='';public $DKIM_identity='';public $DKIM_passphrase='';public $DKIM_domain='';public $DKIM_private='';public $action_function='';public $Version='5.2.2';public $XMailer='';protected $smtp=null;protected $to=array();protected $cc=array();protected $bcc=array();protected $ReplyTo=array();protected $all_recipients=array();protected $attachment=array();protected $CustomHeader=array();protected $message_type='';protected $boundary=array();protected $language=array();protected $error_count=0;protected $sign_cert_file='';protected $sign_key_file='';protected $sign_key_pass='';protected $exceptions=false;const STOP_MESSAGE=0;const STOP_CONTINUE=1;const STOP_CRITICAL=2;const CRLF="\r\n";private function mail_passthru($to,$subject,$body,$header,$params){if (ini_get('safe_mode') || !($this->UseSendmailOptions) ){$rt=@mail($to,$this->EncodeHeader($this->SecureHeader($subject)),$body,$header);}else{$rt=@mail($to,$this->EncodeHeader($this->SecureHeader($subject)),$body,$header,$params);}return $rt;}private function edebug($str){if ($this->Debugoutput == "error_log"){error_log($str);}else{echo $str;}}public function __construct($exceptions=false){$this->exceptions=($exceptions == true);}public function IsHTML($ishtml=true){if ($ishtml){$this->ContentType='text/html';}else{$this->ContentType='text/plain';}}public function Isap_SMTP(){$this->Mailer='smtp';}public function IsMail(){$this->Mailer='mail';}public function IsSendmail(){if (!stristr(ini_get('sendmail_path'),'sendmail')){$this->Sendmail='/var/qmail/bin/sendmail';}$this->Mailer='sendmail';}public function IsQmail(){if (stristr(ini_get('sendmail_path'),'qmail')){$this->Sendmail='/var/qmail/bin/sendmail';}$this->Mailer='sendmail';}public function AddAddress($address,$name=''){return $this->AddAnAddress('to',$address,$name);}public function AddCC($address,$name=''){return $this->AddAnAddress('cc',$address,$name);}public function AddBCC($address,$name=''){return $this->AddAnAddress('bcc',$address,$name);}public function AddReplyTo($address,$name=''){return $this->AddAnAddress('Reply-To',$address,$name);}protected function AddAnAddress($kind,$address,$name=''){if (!preg_match('/^(to|cc|bcc|Reply-To)$/',$kind)){$this->SetError($this->Lang('Invalid recipient array').':'.$kind);if ($this->exceptions){throw new ap_phpmailerException('Invalid recipient array:' .$kind);}if ($this->ap_SMTPDebug){$this->edebug($this->Lang('Invalid recipient array').':'.$kind);}return false;}$address=trim($address);$name=trim(preg_replace('/[\r\n]+/','',$name));if (!$this->ValidateAddress($address)){$this->SetError($this->Lang('invalid_address').':'.$address);if ($this->exceptions){throw new ap_phpmailerException($this->Lang('invalid_address').':'.$address);}if ($this->ap_SMTPDebug){$this->edebug($this->Lang('invalid_address').':'.$address);}return false;}if ($kind != 'Reply-To'){if (!isset($this->all_recipients[strtolower($address)])){array_push($this->$kind,array($address,$name));$this->all_recipients[strtolower($address)]=true;return true;}}else{if (!array_key_exists(strtolower($address),$this->ReplyTo)){$this->ReplyTo[strtolower($address)]=array($address,$name);return true;}}return false;}public function SetFrom($address,$name='',$auto=1){$address=trim($address);$name=trim(preg_replace('/[\r\n]+/','',$name));if (!$this->ValidateAddress($address)){$this->SetError($this->Lang('invalid_address').':'.$address);if ($this->exceptions){throw new ap_phpmailerException($this->Lang('invalid_address').':'.$address);}if ($this->ap_SMTPDebug){$this->edebug($this->Lang('invalid_address').':'.$address);}return false;}$this->From=$address;$this->FromName=$name;if ($auto){if (empty($this->ReplyTo)){$this->AddAnAddress('Reply-To',$address,$name);}if (empty($this->Sender)){$this->Sender=$address;}}return true;}public static function ValidateAddress($address){return preg_match('/^(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){65,}@)((?>(?>(?>((?>(?>(?>\x0D\x0A)?[       ])+|(?>[        ]*\x0D\x0A)?[   ]+)?)(\((?>(?2)(?>[\x01-\x08\x0B\x0C\x0E-\'*-\[\]-\x7F]|\\\[\x00-\x7F]|(?3)))*(?2)\)))+(?2))|(?2))?)([!#-\'*+\/-9=?^-~-]+|"(?>(?2)(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\x7F]))*(?2)")(?>(?1)\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)(?>(?1)\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}|(?!(?:.*[a-f0-9][:\]]){7,})((?6)(?>:(?6)){0,5})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:|(?!(?:.*[a-f0-9]:){5,})(?8)?::(?>((?6)(?>:(?6)){0,3}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])(?>\.(?9)){3}))\])(?1)$/isD',$address);}public function Send(){try{if(!$this->PreSend()) return false;return $this->PostSend();}catch (ap_phpmailerException $e){$this->mailHeader='';$this->SetError($e->getMessage());if ($this->exceptions){throw $e;}return false;}}public function PreSend(){try{$this->mailHeader="";if ((count($this->to) + count($this->cc) + count($this->bcc)) < 1){throw new ap_phpmailerException($this->Lang('provide_address'),self::STOP_CRITICAL);}if(!empty($this->AltBody)){$this->ContentType='multipart/alternative';}$this->error_count=0;$this->SetMessageType();if (empty($this->Body)){throw new ap_phpmailerException($this->Lang('empty_message'),self::STOP_CRITICAL);}$this->MIMEHeader=$this->CreateHeader();$this->MIMEBody=$this->CreateBody();if ($this->Mailer == 'mail'){if (count($this->to) > 0){$this->mailHeader .= $this->AddrAppend("To",$this->to);}else{$this->mailHeader .= $this->HeaderLine("To","undisclosed-recipients:;");}$this->mailHeader .= $this->HeaderLine('Subject',$this->EncodeHeader($this->SecureHeader(trim($this->Subject))));}if (!empty($this->DKIM_domain) && !empty($this->DKIM_private) && !empty($this->DKIM_selector) && !empty($this->DKIM_domain) && file_exists($this->DKIM_private)){$header_dkim=$this->DKIM_Add($this->MIMEHeader,$this->EncodeHeader($this->SecureHeader($this->Subject)),$this->MIMEBody);$this->MIMEHeader=str_replace("\r\n","\n",$header_dkim) .$this->MIMEHeader;}return true;}catch (ap_phpmailerException $e){$this->SetError($e->getMessage());if ($this->exceptions){throw $e;}return false;}}public function PostSend(){try{switch($this->Mailer){case 'sendmail':return $this->SendmailSend($this->MIMEHeader,$this->MIMEBody);case 'smtp':return $this->SmtpSend($this->MIMEHeader,$this->MIMEBody);case 'mail':return $this->MailSend($this->MIMEHeader,$this->MIMEBody);default:return $this->MailSend($this->MIMEHeader,$this->MIMEBody);}}catch (ap_phpmailerException $e){$this->SetError($e->getMessage());if ($this->exceptions){throw $e;}if ($this->ap_SMTPDebug){$this->edebug($e->getMessage()."\n");}}return false;}protected function SendmailSend($header,$body){if ($this->Sender != ''){$sendmail=sprintf("%s -oi -f%s -t",escapeshellcmd($this->Sendmail),escapeshellarg($this->Sender));}else{$sendmail=sprintf("%s -oi -t",escapeshellcmd($this->Sendmail));}if ($this->SingleTo === true){foreach ($this->SingleToArray as $val){if(!@$mail=popen($sendmail,'w')){throw new ap_phpmailerException($this->Lang('execute') .$this->Sendmail,self::STOP_CRITICAL);}fputs($mail,"To:" .$val ."\n");fputs($mail,$header);fputs($mail,$body);$result=pclose($mail);$isSent=($result == 0) ? 1 :0;$this->doCallback($isSent,$val,$this->cc,$this->bcc,$this->Subject,$body);if($result != 0){throw new ap_phpmailerException($this->Lang('execute') .$this->Sendmail,self::STOP_CRITICAL);}}}else{if(!@$mail=popen($sendmail,'w')){throw new ap_phpmailerException($this->Lang('execute') .$this->Sendmail,self::STOP_CRITICAL);}fputs($mail,$header);fputs($mail,$body);$result=pclose($mail);$isSent=($result == 0) ? 1 :0;$this->doCallback($isSent,$this->to,$this->cc,$this->bcc,$this->Subject,$body);if($result != 0){throw new ap_phpmailerException($this->Lang('execute') .$this->Sendmail,self::STOP_CRITICAL);}}return true;}protected function MailSend($header,$body){$toArr=array();foreach($this->to as $t){$toArr[]=$this->AddrFormat($t);}$to=implode(',',$toArr);if (empty($this->Sender)){$params="-oi ";}else{$params=sprintf("-oi -f%s",$this->Sender);}if ($this->Sender != '' and !ini_get('safe_mode')){$old_from=ini_get('sendmail_from');ini_set('sendmail_from',$this->Sender);}$rt=false;if ($this->SingleTo === true && count($toArr) > 1){foreach ($toArr as $val){$rt=$this->mail_passthru($val,$this->Subject,$body,$header,$params);$isSent=($rt == 1) ? 1 :0;$this->doCallback($isSent,$val,$this->cc,$this->bcc,$this->Subject,$body);}}else{$rt=$this->mail_passthru($to,$this->Subject,$body,$header,$params);$isSent=($rt == 1) ? 1 :0;$this->doCallback($isSent,$to,$this->cc,$this->bcc,$this->Subject,$body);}if (isset($old_from)){ini_set('sendmail_from',$old_from);}if(!$rt){throw new ap_phpmailerException($this->Lang('instantiate'),self::STOP_CRITICAL);}return true;}protected function SmtpSend($header,$body){$this->smtp=new ap_SMTP;$bad_rcpt=array();if(!$this->SmtpConnect()){throw new ap_phpmailerException($this->Lang('smtp_connect_failed'),self::STOP_CRITICAL);}$smtp_from=($this->Sender == '') ? $this->From :$this->Sender;if(!$this->smtp->Mail($smtp_from)){throw new ap_phpmailerException($this->Lang('from_failed') .$smtp_from,self::STOP_CRITICAL);}foreach($this->to as $to){if (!$this->smtp->Recipient($to[0])){$bad_rcpt[]=$to[0];$isSent=0;$this->doCallback($isSent,$to[0],'','',$this->Subject,$body);}else{$isSent=1;$this->doCallback($isSent,$to[0],'','',$this->Subject,$body);}}foreach($this->cc as $cc){if (!$this->smtp->Recipient($cc[0])){$bad_rcpt[]=$cc[0];$isSent=0;$this->doCallback($isSent,'',$cc[0],'',$this->Subject,$body);}else{$isSent=1;$this->doCallback($isSent,'',$cc[0],'',$this->Subject,$body);}}foreach($this->bcc as $bcc){if (!$this->smtp->Recipient($bcc[0])){$bad_rcpt[]=$bcc[0];$isSent=0;$this->doCallback($isSent,'','',$bcc[0],$this->Subject,$body);}else{$isSent=1;$this->doCallback($isSent,'','',$bcc[0],$this->Subject,$body);}}if (count($bad_rcpt) > 0 ){$badaddresses=implode(',',$bad_rcpt);throw new ap_phpmailerException($this->Lang('recipients_failed') .$badaddresses);}if(!$this->smtp->Data($header .$body)){throw new ap_phpmailerException($this->Lang('data_not_accepted'),self::STOP_CRITICAL);}if($this->ap_SMTPKeepAlive == true){$this->smtp->Reset();}else{$this->smtp->Quit();$this->smtp->Close();}return true;}public function SmtpConnect(){if(is_null($this->smtp)){$this->smtp=new ap_SMTP;}$this->smtp->Timeout=$this->Timeout;$this->smtp->do_debug=$this->ap_SMTPDebug;$hosts=explode(';',$this->Host);$index=0;$connection=$this->smtp->Connected();try{while($index < count($hosts) && !$connection){$hostinfo=array();if (preg_match('/^(.+):([0-9]+)$/',$hosts[$index],$hostinfo)){$host=$hostinfo[1];$port=$hostinfo[2];}else{$host=$hosts[$index];$port=$this->Port;}$tls=($this->ap_SMTPSecure == 'tls');$ssl=($this->ap_SMTPSecure == 'ssl');if ($this->smtp->Connect(($ssl ? 'ssl://':'').$host,$port,$this->Timeout)){$hello=($this->Helo != '' ? $this->Helo :$this->ServerHostname());$this->smtp->Hello($hello);if ($tls){if (!$this->smtp->StartTLS()){throw new ap_phpmailerException($this->Lang('tls'));}$this->smtp->Hello($hello);}$connection=true;if ($this->ap_SMTPAuth){if (!$this->smtp->Authenticate($this->Username,$this->Password,$this->AuthType,$this->Realm,$this->Workstation)){throw new ap_phpmailerException($this->Lang('authenticate'));}}}$index++;if (!$connection){throw new ap_phpmailerException($this->Lang('connect_host'));}}}catch (ap_phpmailerException $e){$this->smtp->Reset();if ($this->exceptions){throw $e;}}return true;}public function SmtpClose(){if ($this->smtp !== null){if($this->smtp->Connected()){$this->smtp->Quit();$this->smtp->Close();}}}function SetLanguage($langcode='en',$lang_path='language/'){$PHPMAILER_LANG=array('authenticate'         => 'ap_SMTP Error:Could not authenticate.','connect_host'         => 'ap_SMTP Error:Could not connect to ap_SMTP host.','data_not_accepted'    => 'ap_SMTP Error:Data not accepted.','empty_message'        => 'Message body empty','encoding'             => 'Unknown encoding:','execute'              => 'Could not execute:','file_access'          => 'Could not access file:','file_open'            => 'File Error:Could not open file:','from_failed'          => 'The following From address failed:','instantiate'          => 'Could not instantiate mail function.','invalid_address'      => 'Invalid address','mailer_not_supported' => ' mailer is not supported.','provide_address'      => 'You must provide at least one recipient email address.','recipients_failed'    => 'ap_SMTP Error:The following recipients failed:','signing'              => 'Signing Error:','smtp_connect_failed'  => 'ap_SMTP Connect() failed.','smtp_error'=> 'ap_SMTP server error:','variable_set' => 'Cannot set or reset variable:');$l=true;if ($langcode != 'en'){$l=@include $lang_path.'ap_phpmailer.lang-'.$langcode.'.php';}$this->language=$PHPMAILER_LANG;return ($l == true);}public function GetTranslations(){return $this->language;}public function AddrAppend($type,$addr){$addr_str=$type .':';$addresses=array();foreach ($addr as $a){$addresses[]=$this->AddrFormat($a);}$addr_str .= implode(',',$addresses);$addr_str .= $this->LE;return $addr_str;}public function AddrFormat($addr){if (empty($addr[1])){return $this->SecureHeader($addr[0]);}else{return $this->EncodeHeader($this->SecureHeader($addr[1]),'phrase') ." <" .$this->SecureHeader($addr[0]) .">";}}public function WrapText($message,$length,$qp_mode=false){$soft_break=($qp_mode) ? sprintf(" =%s",$this->LE) :$this->LE;$is_utf8=(strtolower($this->CharSet) == "utf-8");$lelen=strlen($this->LE);$crlflen=strlen(self::CRLF);$message=$this->FixEOL($message);if (substr($message,-$lelen) == $this->LE){$message=substr($message,0,-$lelen);}$line=explode($this->LE,$message);$message='';for ($i=0 ;$i < count($line);$i++){$line_part=explode(' ',$line[$i]);$buf='';for ($e=0;$e<count($line_part);$e++){$word=$line_part[$e];if ($qp_mode and (strlen($word) > $length)){$space_left=$length - strlen($buf) - $crlflen;if ($e != 0){if ($space_left > 20){$len=$space_left;if ($is_utf8){$len=$this->UTF8CharBoundary($word,$len);}elseif (substr($word,$len - 1,1) == "="){$len--;}elseif (substr($word,$len - 2,1) == "="){$len -= 2;}$part=substr($word,0,$len);$word=substr($word,$len);$buf .= ' ' .$part;$message .= $buf .sprintf("=%s",self::CRLF);}else{$message .= $buf .$soft_break;}$buf='';}while (strlen($word) > 0){$len=$length;if ($is_utf8){$len=$this->UTF8CharBoundary($word,$len);}elseif (substr($word,$len - 1,1) == "="){$len--;}elseif (substr($word,$len - 2,1) == "="){$len -= 2;}$part=substr($word,0,$len);$word=substr($word,$len);if (strlen($word) > 0){$message .= $part .sprintf("=%s",self::CRLF);}else{$buf=$part;}}}else{$buf_o=$buf;$buf .= ($e == 0) ? $word :(' ' .$word);if (strlen($buf) > $length and $buf_o != ''){$message .= $buf_o .$soft_break;$buf=$word;}}}$message .= $buf .self::CRLF;}return $message;}public function UTF8CharBoundary($encodedText,$maxLength){$foundSplitPos=false;$lookBack=3;while (!$foundSplitPos){$lastChunk=substr($encodedText,$maxLength - $lookBack,$lookBack);$encodedCharPos=strpos($lastChunk,"=");if ($encodedCharPos !== false){$hex=substr($encodedText,$maxLength - $lookBack + $encodedCharPos + 1,2);$dec=hexdec($hex);if ($dec < 128){$maxLength=($encodedCharPos == 0) ? $maxLength :$maxLength - ($lookBack - $encodedCharPos);$foundSplitPos=true;}elseif ($dec >= 192){$maxLength=$maxLength - ($lookBack - $encodedCharPos);$foundSplitPos=true;}elseif ($dec < 192){$lookBack += 3;}}else{$foundSplitPos=true;}}return $maxLength;}public function SetWordWrap(){if($this->WordWrap < 1){return;}switch($this->message_type){case 'alt':case 'alt_inline':case 'alt_attach':case 'alt_inline_attach':$this->AltBody=$this->WrapText($this->AltBody,$this->WordWrap);break;default:$this->Body=$this->WrapText($this->Body,$this->WordWrap);break;}}public function CreateHeader(){$result='';$uniq_id=md5(uniqid(time()));$this->boundary[1]='b1_' .$uniq_id;$this->boundary[2]='b2_' .$uniq_id;$this->boundary[3]='b3_' .$uniq_id;if ($this->MessageDate == ''){$result .= $this->HeaderLine('Date',self::RFCDate());}else{$result .= $this->HeaderLine('Date',$this->MessageDate);}if ($this->ReturnPath){$result .= $this->HeaderLine('Return-Path',trim($this->ReturnPath));}elseif ($this->Sender == ''){$result .= $this->HeaderLine('Return-Path',trim($this->From));}else{$result .= $this->HeaderLine('Return-Path',trim($this->Sender));}if($this->Mailer != 'mail'){if ($this->SingleTo === true){foreach($this->to as $t){$this->SingleToArray[]=$this->AddrFormat($t);}}else{if(count($this->to) > 0){$result .= $this->AddrAppend('To',$this->to);}elseif (count($this->cc) == 0){$result .= $this->HeaderLine('To','undisclosed-recipients:;');}}}$from=array();$from[0][0]=trim($this->From);$from[0][1]=$this->FromName;$result .= $this->AddrAppend('From',$from);if(count($this->cc) > 0){$result .= $this->AddrAppend('Cc',$this->cc);}if((($this->Mailer == 'sendmail') || ($this->Mailer == 'mail')) && (count($this->bcc) > 0)){$result .= $this->AddrAppend('Bcc',$this->bcc);}if(count($this->ReplyTo) > 0){$result .= $this->AddrAppend('Reply-To',$this->ReplyTo);}if($this->Mailer != 'mail'){$result .= $this->HeaderLine('Subject',$this->EncodeHeader($this->SecureHeader($this->Subject)));}if($this->MessageID != ''){$result .= $this->HeaderLine('Message-ID',$this->MessageID);}else{$result .= sprintf("Message-ID:<%s@%s>%s",$uniq_id,$this->ServerHostname(),$this->LE);}$result .= $this->HeaderLine('X-Priority',$this->Priority);if ($this->XMailer == ''){$result .= $this->HeaderLine('X-Mailer','ap_PHPMailer '.$this->Version.' (http://code.google.com/a/apache-extras.org/p/ap_phpmailer/)');}else{$myXmailer=trim($this->XMailer);if ($myXmailer){$result .= $this->HeaderLine('X-Mailer',$myXmailer);}}if($this->ConfirmReadingTo != ''){$result .= $this->HeaderLine('Disposition-Notification-To','<' .trim($this->ConfirmReadingTo) .'>');}for($index=0;$index < count($this->CustomHeader);$index++){$result .= $this->HeaderLine(trim($this->CustomHeader[$index][0]),$this->EncodeHeader(trim($this->CustomHeader[$index][1])));}if (!$this->sign_key_file){$result .= $this->HeaderLine('MIME-Version','1.0');$result .= $this->GetMailMIME();}return $result;}public function GetMailMIME(){$result='';switch($this->message_type){case 'inline':$result .= $this->HeaderLine('Content-Type','multipart/related;');$result .= $this->TextLine("\tboundary=\"" .$this->boundary[1] .'"');break;case 'attach':case 'inline_attach':case 'alt_attach':case 'alt_inline_attach':$result .= $this->HeaderLine('Content-Type','multipart/mixed;');$result .= $this->TextLine("\tboundary=\"" .$this->boundary[1] .'"');break;case 'alt':case 'alt_inline':$result .= $this->HeaderLine('Content-Type','multipart/alternative;');$result .= $this->TextLine("\tboundary=\"" .$this->boundary[1] .'"');break;default:$result .= $this->HeaderLine('Content-Transfer-Encoding',$this->Encoding);$result .= $this->TextLine('Content-Type:'.$this->ContentType.';charset='.$this->CharSet);break;}if($this->Mailer != 'mail'){$result .= $this->LE;}return $result;}public function GetSentMIMEMessage(){return $this->MIMEHeader .$this->mailHeader .self::CRLF .$this->MIMEBody;}public function CreateBody(){$body='';if ($this->sign_key_file){$body .= $this->GetMailMIME().$this->LE;}$this->SetWordWrap();switch($this->message_type){case 'inline':$body .= $this->GetBoundary($this->boundary[1],'','','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->AttachAll("inline",$this->boundary[1]);break;case 'attach':$body .= $this->GetBoundary($this->boundary[1],'','','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->AttachAll("attachment",$this->boundary[1]);break;case 'inline_attach':$body .= $this->TextLine("--" .$this->boundary[1]);$body .= $this->HeaderLine('Content-Type','multipart/related;');$body .= $this->TextLine("\tboundary=\"" .$this->boundary[2] .'"');$body .= $this->LE;$body .= $this->GetBoundary($this->boundary[2],'','','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->AttachAll("inline",$this->boundary[2]);$body .= $this->LE;$body .= $this->AttachAll("attachment",$this->boundary[1]);break;case 'alt':$body .= $this->GetBoundary($this->boundary[1],'','text/plain','');$body .= $this->EncodeString($this->AltBody,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->GetBoundary($this->boundary[1],'','text/html','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->EndBoundary($this->boundary[1]);break;case 'alt_inline':$body .= $this->GetBoundary($this->boundary[1],'','text/plain','');$body .= $this->EncodeString($this->AltBody,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->TextLine("--" .$this->boundary[1]);$body .= $this->HeaderLine('Content-Type','multipart/related;');$body .= $this->TextLine("\tboundary=\"" .$this->boundary[2] .'"');$body .= $this->LE;$body .= $this->GetBoundary($this->boundary[2],'','text/html','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->AttachAll("inline",$this->boundary[2]);$body .= $this->LE;$body .= $this->EndBoundary($this->boundary[1]);break;case 'alt_attach':$body .= $this->TextLine("--" .$this->boundary[1]);$body .= $this->HeaderLine('Content-Type','multipart/alternative;');$body .= $this->TextLine("\tboundary=\"" .$this->boundary[2] .'"');$body .= $this->LE;$body .= $this->GetBoundary($this->boundary[2],'','text/plain','');$body .= $this->EncodeString($this->AltBody,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->GetBoundary($this->boundary[2],'','text/html','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->EndBoundary($this->boundary[2]);$body .= $this->LE;$body .= $this->AttachAll("attachment",$this->boundary[1]);break;case 'alt_inline_attach':$body .= $this->TextLine("--" .$this->boundary[1]);$body .= $this->HeaderLine('Content-Type','multipart/alternative;');$body .= $this->TextLine("\tboundary=\"" .$this->boundary[2] .'"');$body .= $this->LE;$body .= $this->GetBoundary($this->boundary[2],'','text/plain','');$body .= $this->EncodeString($this->AltBody,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->TextLine("--" .$this->boundary[2]);$body .= $this->HeaderLine('Content-Type','multipart/related;');$body .= $this->TextLine("\tboundary=\"" .$this->boundary[3] .'"');$body .= $this->LE;$body .= $this->GetBoundary($this->boundary[3],'','text/html','');$body .= $this->EncodeString($this->Body,$this->Encoding);$body .= $this->LE.$this->LE;$body .= $this->AttachAll("inline",$this->boundary[3]);$body .= $this->LE;$body .= $this->EndBoundary($this->boundary[2]);$body .= $this->LE;$body .= $this->AttachAll("attachment",$this->boundary[1]);break;default:$body .= $this->EncodeString($this->Body,$this->Encoding);break;}if ($this->IsError()){$body='';}elseif ($this->sign_key_file){try{$file=tempnam('','mail');file_put_contents($file,$body);$signed=tempnam("","signed");if (@openssl_pkcs7_sign($file,$signed,"file://".$this->sign_cert_file,array("file://".$this->sign_key_file,$this->sign_key_pass),NULL)){@unlink($file);$body=file_get_contents($signed);@unlink($signed);}else{@unlink($file);@unlink($signed);throw new ap_phpmailerException($this->Lang("signing").openssl_error_string());}}catch (ap_phpmailerException $e){$body='';if ($this->exceptions){throw $e;}}}return $body;}protected function GetBoundary($boundary,$charSet,$contentType,$encoding){$result='';if($charSet == ''){$charSet=$this->CharSet;}if($contentType == ''){$contentType=$this->ContentType;}if($encoding == ''){$encoding=$this->Encoding;}$result .= $this->TextLine('--' .$boundary);$result .= sprintf("Content-Type:%s;charset=%s",$contentType,$charSet);$result .= $this->LE;$result .= $this->HeaderLine('Content-Transfer-Encoding',$encoding);$result .= $this->LE;return $result;}protected function EndBoundary($boundary){return $this->LE .'--' .$boundary .'--' .$this->LE;}protected function SetMessageType(){$this->message_type=array();if($this->AlternativeExists()) $this->message_type[]="alt";if($this->InlineImageExists()) $this->message_type[]="inline";if($this->AttachmentExists()) $this->message_type[]="attach";$this->message_type=implode("_",$this->message_type);if($this->message_type == "") $this->message_type="plain";}public function HeaderLine($name,$value){return $name .':' .$value .$this->LE;}public function TextLine($value){return $value .$this->LE;}public function AddAttachment($path,$name='',$encoding='base64',$type='application/octet-stream'){try{if (!@is_file($path) ){throw new ap_phpmailerException($this->Lang('file_access') .$path,self::STOP_CONTINUE);}$filename=basename($path);if ($name == '' ){$name=$filename;}$this->attachment[]=array(0 => $path,1 => $filename,2 => $name,3 => $encoding,4 => $type,5 => false,6 => 'attachment',7 => 0);}catch (ap_phpmailerException $e){$this->SetError($e->getMessage());if ($this->exceptions){throw $e;}if ($this->ap_SMTPDebug){$this->edebug($e->getMessage()."\n");}if ($e->getCode() == self::STOP_CRITICAL ){return false;}}return true;}public function GetAttachments(){return $this->attachment;}protected function AttachAll($disposition_type,$boundary){$mime=array();$cidUniq=array();$incl=array();foreach ($this->attachment as $attachment){if($attachment[6] == $disposition_type){$string='';$path='';$bString=$attachment[5];if ($bString){$string=$attachment[0];}else{$path=$attachment[0];}$inclhash=md5(serialize($attachment));if (in_array($inclhash,$incl)){continue;}$incl[]=$inclhash;$filename=$attachment[1];$name=$attachment[2];$encoding=$attachment[3];$type=$attachment[4];$disposition=$attachment[6];$cid=$attachment[7];if ($disposition == 'inline' && isset($cidUniq[$cid]) ){continue;}$cidUniq[$cid]=true;$mime[]=sprintf("--%s%s",$boundary,$this->LE);$mime[]=sprintf("Content-Type:%s;name=\"%s\"%s",$type,$this->EncodeHeader($this->SecureHeader($name)),$this->LE);$mime[]=sprintf("Content-Transfer-Encoding:%s%s",$encoding,$this->LE);if($disposition == 'inline'){$mime[]=sprintf("Content-ID:<%s>%s",$cid,$this->LE);}$mime[]=sprintf("Content-Disposition:%s;filename=\"%s\"%s",$disposition,$this->EncodeHeader($this->SecureHeader($name)),$this->LE.$this->LE);if($bString){$mime[]=$this->EncodeString($string,$encoding);if($this->IsError()){return '';}$mime[]=$this->LE.$this->LE;}else{$mime[]=$this->EncodeFile($path,$encoding);if($this->IsError()){return '';}$mime[]=$this->LE.$this->LE;}}}$mime[]=sprintf("--%s--%s",$boundary,$this->LE);return implode("",$mime);}protected function EncodeFile($path,$encoding='base64'){try{if (!is_readable($path)){throw new ap_phpmailerException($this->Lang('file_open') .$path,self::STOP_CONTINUE);}$magic_quotes=get_magic_quotes_runtime();if ($magic_quotes){if (version_compare(PHP_VERSION,'5.3.0','<')){set_magic_quotes_runtime(0);}else{ini_set('magic_quotes_runtime',0);}}$file_buffer=file_get_contents($path);$file_buffer=$this->EncodeString($file_buffer,$encoding);if ($magic_quotes){if (version_compare(PHP_VERSION,'5.3.0','<')){set_magic_quotes_runtime($magic_quotes);}else{ini_set('magic_quotes_runtime',$magic_quotes);}}return $file_buffer;}catch (Exception $e){$this->SetError($e->getMessage());return '';}}public function EncodeString($str,$encoding='base64'){$encoded='';switch(strtolower($encoding)){case 'base64':$encoded=chunk_split(base64_encode($str),76,$this->LE);break;case '7bit':case '8bit':$encoded=$this->FixEOL($str);if (substr($encoded,-(strlen($this->LE))) != $this->LE)$encoded .= $this->LE;break;case 'binary':$encoded=$str;break;case 'quoted-printable':$encoded=$this->EncodeQP($str);break;default:$this->SetError($this->Lang('encoding') .$encoding);break;}return $encoded;}public function EncodeHeader($str,$position='text'){$x=0;switch (strtolower($position)){case 'phrase':if (!preg_match('/[\200-\377]/',$str)){$encoded=addcslashes($str,"\0..\37\177\\\"");if (($str == $encoded) && !preg_match('/[^A-Za-z0-9!#$%&\'*+\/=?^_`{|}~ -]/',$str)){return ($encoded);}else{return ("\"$encoded\"");}}$x=preg_match_all('/[^\040\041\043-\133\135-\176]/',$str,$matches);break;case 'comment':$x=preg_match_all('/[()"]/',$str,$matches);case 'text':default:$x += preg_match_all('/[\000-\010\013\014\016-\037\177-\377]/',$str,$matches);break;}if ($x == 0){return ($str);}$maxlen=75 - 7 - strlen($this->CharSet);if (strlen($str)/3 < $x){$encoding='B';if (function_exists('mb_strlen') && $this->HasMultiBytes($str)){$encoded=$this->Base64EncodeWrapMB($str,"\n");}else{$encoded=base64_encode($str);$maxlen -= $maxlen % 4;$encoded=trim(chunk_split($encoded,$maxlen,"\n"));}}else{$encoding='Q';$encoded=$this->EncodeQ($str,$position);$encoded=$this->WrapText($encoded,$maxlen,true);$encoded=str_replace('='.self::CRLF,"\n",trim($encoded));}$encoded=preg_replace('/^(.*)$/m'," =?".$this->CharSet."?$encoding?\\1?=",$encoded);$encoded=trim(str_replace("\n",$this->LE,$encoded));return $encoded;}public function HasMultiBytes($str){if (function_exists('mb_strlen')){return (strlen($str) > mb_strlen($str,$this->CharSet));}else{return false;}}public function Base64EncodeWrapMB($str,$lf=null){$start="=?".$this->CharSet."?B?";$end="?=";$encoded="";if ($lf === null){$lf=$this->LE;}$mb_length=mb_strlen($str,$this->CharSet);$length=75 - strlen($start) - strlen($end);$ratio=$mb_length / strlen($str);$offset=$avgLength=floor($length * $ratio * .75);for ($i=0;$i < $mb_length;$i += $offset){$lookBack=0;do{$offset=$avgLength - $lookBack;$chunk=mb_substr($str,$i,$offset,$this->CharSet);$chunk=base64_encode($chunk);$lookBack++;}while (strlen($chunk) > $length);$encoded .= $chunk .$lf;}$encoded=substr($encoded,0,-strlen($lf));return $encoded;}public function EncodeQPphp($input='',$line_max=76,$space_conv=false){$hex=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');$lines=preg_split('/(?:\r\n|\r|\n)/',$input);$eol="\r\n";$escape='=';$output='';while(list(,$line)=each($lines) ){$linlen=strlen($line);$newline='';for($i=0;$i < $linlen;$i++){$c=substr($line,$i,1 );$dec=ord($c );if (($i == 0 ) && ($dec == 46 ) ){$c='=2E';}if ($dec == 32 ){if ($i == ($linlen - 1 ) ){$c='=20';}else if ($space_conv ){$c='=20';}}elseif (($dec == 61) || ($dec < 32 ) || ($dec > 126) ){$h2=(integer)floor($dec/16);$h1=(integer)floor($dec%16);$c=$escape.$hex[$h2].$hex[$h1];}if ((strlen($newline) + strlen($c)) >= $line_max ){$output .= $newline.$escape.$eol;$newline='';if ($dec == 46 ){$c='=2E';}}$newline .= $c;}$output .= $newline.$eol;}return $output;}public function EncodeQP($string,$line_max=76,$space_conv=false){if (function_exists('quoted_printable_encode')){return quoted_printable_encode($string);}$filters=stream_get_filters();if (!in_array('convert.*',$filters)){return $this->EncodeQPphp($string,$line_max,$space_conv);}$fp=fopen('php://temp/','r+');$string=preg_replace('/\r\n?/',$this->LE,$string);$params=array('line-length' => $line_max,'line-break-chars' => $this->LE);$s=stream_filter_append($fp,'convert.quoted-printable-encode',STREAM_FILTER_READ,$params);fputs($fp,$string);rewind($fp);$out=stream_get_contents($fp);stream_filter_remove($s);$out=preg_replace('/^\./m','=2E',$out);fclose($fp);return $out;}public function EncodeQ($str,$position='text'){$pattern="";$encoded=str_replace(array("\r","\n"),'',$str);switch (strtolower($position)){case 'phrase':$pattern='^A-Za-z0-9!*+\/ -';break;case 'comment':$pattern='\(\)"';case 'text':default:$pattern='\075\000-\011\013\014\016-\037\077\137\177-\377' .$pattern;break;}if (preg_match_all("/[{$pattern}]/",$encoded,$matches)){foreach (array_unique($matches[0]) as $char){$encoded=str_replace($char,'=' .sprintf('%02X',ord($char)),$encoded);}}return str_replace(' ','_',$encoded);}public function AddStringAttachment($string,$filename,$encoding='base64',$type='application/octet-stream'){$this->attachment[]=array(0 => $string,1 => $filename,2 => basename($filename),3 => $encoding,4 => $type,5 => true,6 => 'attachment',7 => 0);}public function AddEmbeddedImage($path,$cid,$name='',$encoding='base64',$type='application/octet-stream'){if (!@is_file($path) ){$this->SetError($this->Lang('file_access') .$path);return false;}$filename=basename($path);if ($name == '' ){$name=$filename;}$this->attachment[]=array(0 => $path,1 => $filename,2 => $name,3 => $encoding,4 => $type,5 => false,6 => 'inline',7 => $cid);return true;}public function AddStringEmbeddedImage($string,$cid,$name='',$encoding='base64',$type='application/octet-stream'){$this->attachment[]=array(0 => $string,1 => $name,2 => $name,3 => $encoding,4 => $type,5 => true,6 => 'inline',7 => $cid);}public function InlineImageExists(){foreach($this->attachment as $attachment){if ($attachment[6] == 'inline'){return true;}}return false;}public function AttachmentExists(){foreach($this->attachment as $attachment){if ($attachment[6] == 'attachment'){return true;}}return false;}public function AlternativeExists(){return !empty($this->AltBody);}public function ClearAddresses(){foreach($this->to as $to){unset($this->all_recipients[strtolower($to[0])]);}$this->to=array();}public function ClearCCs(){foreach($this->cc as $cc){unset($this->all_recipients[strtolower($cc[0])]);}$this->cc=array();}public function ClearBCCs(){foreach($this->bcc as $bcc){unset($this->all_recipients[strtolower($bcc[0])]);}$this->bcc=array();}public function ClearReplyTos(){$this->ReplyTo=array();}public function ClearAllRecipients(){$this->to=array();$this->cc=array();$this->bcc=array();$this->all_recipients=array();}public function ClearAttachments(){$this->attachment=array();}public function ClearCustomHeaders(){$this->CustomHeader=array();}protected function SetError($msg){$this->error_count++;if ($this->Mailer == 'smtp' and !is_null($this->smtp)){$lasterror=$this->smtp->getError();if (!empty($lasterror) and array_key_exists('smtp_msg',$lasterror)){$msg .= '<p>' .$this->Lang('smtp_error') .$lasterror['smtp_msg'] ."</p>\n";}}$this->ErrorInfo=$msg;}public static function RFCDate(){$tz=date('Z');$tzs=($tz < 0) ? '-' :'+';$tz=abs($tz);$tz=(int)($tz/3600)*100 + ($tz%3600)/60;$result=sprintf("%s %s%04d",date('D,j M Y H:i:s'),$tzs,$tz);return $result;}protected function ServerHostname(){if (!empty($this->Hostname)){$result=$this->Hostname;}elseif (isset($_SERVER['SERVER_NAME'])){$result=$_SERVER['SERVER_NAME'];}else{$result='localhost.localdomain';}return $result;}protected function Lang($key){if(count($this->language) < 1){$this->SetLanguage('en');}if(isset($this->language[$key])){return $this->language[$key];}else{return 'Language string failed to load:' .$key;}}public function IsError(){return ($this->error_count > 0);}public function FixEOL($str){$nstr=str_replace(array("\r\n","\r"),"\n",$str);if ($this->LE !== "\n"){$nstr=str_replace("\n",$this->LE,$nstr);}return  $nstr;}public function AddCustomHeader($name,$value=null){if ($value === null){$this->CustomHeader[]=explode(':',$name,2);}else{$this->CustomHeader[]=array($name,$value);}}public function MsgHTML($message,$basedir=''){preg_match_all("/(src|background)=[\"'](.*)[\"']/Ui",$message,$images);if(isset($images[2])){foreach($images[2] as $i => $url){if (!preg_match('#^[A-z]+://#',$url)){$filename=basename($url);$directory=dirname($url);if ($directory == '.'){$directory='';}$cid='cid:' .md5($filename);$ext=pathinfo($filename,PATHINFO_EXTENSION);$mimeType=self::_mime_types($ext);if (strlen($basedir) > 1 && substr($basedir,-1) != '/'){$basedir .= '/';}if (strlen($directory) > 1 && substr($directory,-1) != '/'){$directory .= '/';}if ($this->AddEmbeddedImage($basedir.$directory.$filename,md5($filename),$filename,'base64',$mimeType) ){$message=preg_replace("/".$images[1][$i]."=[\"']".preg_quote($url,'/')."[\"']/Ui",$images[1][$i]."=\"".$cid."\"",$message);}}}}$this->IsHTML(true);$this->Body=$message;if (empty($this->AltBody)){$textMsg=trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s','',$message)));if (!empty($textMsg)){$this->AltBody=html_entity_decode($textMsg,ENT_QUOTES,$this->CharSet);}}if (empty($this->AltBody)){$this->AltBody='To view this email message,open it in a program that understands HTML!' ."\n\n";}return $message;}public static function _mime_types($ext=''){$mimes=array('xl'    =>  'application/excel','hqx'   =>  'application/mac-binhex40','cpt'   =>  'application/mac-compactpro','bin'   =>  'application/macbinary','doc'   =>  'application/msword','word'  =>  'application/msword','class' =>  'application/octet-stream','dll'   =>  'application/octet-stream','dms'   =>  'application/octet-stream','exe'   =>  'application/octet-stream','lha'   =>  'application/octet-stream','lzh'   =>  'application/octet-stream','psd'   =>  'application/octet-stream','sea'   =>  'application/octet-stream','so'    =>  'application/octet-stream','oda'   =>  'application/oda','pdf'   =>  'application/pdf','ai'    =>  'application/postscript','eps'   =>  'application/postscript','ps'    =>  'application/postscript','smi'   =>  'application/smil','smil'  =>  'application/smil','mif'   =>  'application/vnd.mif','xls'   =>  'application/vnd.ms-excel','ppt'   =>  'application/vnd.ms-powerpoint','wbxml' =>  'application/vnd.wap.wbxml','wmlc'  =>  'application/vnd.wap.wmlc','dcr'   =>  'application/x-director','dir'   =>  'application/x-director','dxr'   =>  'application/x-director','dvi'   =>  'application/x-dvi','gtar'  =>  'application/x-gtar','php3'  =>  'application/x-httpd-php','php4'  =>  'application/x-httpd-php','php'   =>  'application/x-httpd-php','phtml' =>  'application/x-httpd-php','phps'  =>  'application/x-httpd-php-source','js'    =>  'application/x-javascript','swf'   =>  'application/x-shockwave-flash','sit'   =>  'application/x-stuffit','tar'   =>  'application/x-tar','tgz'   =>  'application/x-tar','xht'   =>  'application/xhtml+xml','xhtml' =>  'application/xhtml+xml','zip'   =>  'application/zip','mid'   =>  'audio/midi','midi'  =>  'audio/midi','mp2'   =>  'audio/mpeg','mp3'   =>  'audio/mpeg','mpga'  =>  'audio/mpeg','aif'   =>  'audio/x-aiff','aifc'  =>  'audio/x-aiff','aiff'  =>  'audio/x-aiff','ram'   =>  'audio/x-pn-realaudio','rm'    =>  'audio/x-pn-realaudio','rpm'   =>  'audio/x-pn-realaudio-plugin','ra'    =>  'audio/x-realaudio','wav'   =>  'audio/x-wav','bmp'   =>  'image/bmp','gif'   =>  'image/gif','jpeg'  =>  'image/jpeg','jpe'   =>  'image/jpeg','jpg'   =>  'image/jpeg','png'   =>  'image/png','tiff'  =>  'image/tiff','tif'   =>  'image/tiff','eml'   =>  'message/rfc822','css'   =>  'text/css','html'  =>  'text/html','htm'   =>  'text/html','shtml' =>  'text/html','log'   =>  'text/plain','text'  =>  'text/plain','txt'   =>  'text/plain','rtx'   =>  'text/richtext','rtf'   =>  'text/rtf','xml'   =>  'text/xml','xsl'   =>  'text/xml','mpeg'  =>  'video/mpeg','mpe'   =>  'video/mpeg','mpg'   =>  'video/mpeg','mov'   =>  'video/quicktime','qt'    =>  'video/quicktime','rv'    =>  'video/vnd.rn-realvideo','avi'   =>  'video/x-msvideo','movie' =>  'video/x-sgi-movie');return (!isset($mimes[strtolower($ext)])) ? 'application/octet-stream' :$mimes[strtolower($ext)];}public function set($name,$value=''){try{if (isset($this->$name) ){$this->$name=$value;}else{throw new ap_phpmailerException($this->Lang('variable_set') .$name,self::STOP_CRITICAL);}}catch (Exception $e){$this->SetError($e->getMessage());if ($e->getCode() == self::STOP_CRITICAL){return false;}}return true;}public function SecureHeader($str){return trim(str_replace(array("\r","\n"),'',$str));}public function Sign($cert_filename,$key_filename,$key_pass){$this->sign_cert_file=$cert_filename;$this->sign_key_file=$key_filename;$this->sign_key_pass=$key_pass;}public function DKIM_QP($txt){$line='';for ($i=0;$i < strlen($txt);$i++){$ord=ord($txt[$i]);if (((0x21 <= $ord) && ($ord <= 0x3A)) || $ord == 0x3C || ((0x3E <= $ord) && ($ord <= 0x7E)) ){$line .= $txt[$i];}else{$line .= "=".sprintf("%02X",$ord);}}return $line;}public function DKIM_Sign($s){$privKeyStr=file_get_contents($this->DKIM_private);if ($this->DKIM_passphrase != ''){$privKey=openssl_pkey_get_private($privKeyStr,$this->DKIM_passphrase);}else{$privKey=$privKeyStr;}if (openssl_sign($s,$signature,$privKey)){return base64_encode($signature);}return '';}public function DKIM_HeaderC($s){$s=preg_replace("/\r\n\s+/"," ",$s);$lines=explode("\r\n",$s);foreach ($lines as $key => $line){list($heading,$value)=explode(":",$line,2);$heading=strtolower($heading);$value=preg_replace("/\s+/"," ",$value) ;$lines[$key]=$heading.":".trim($value) ;}$s=implode("\r\n",$lines);return $s;}public function DKIM_BodyC($body){if ($body == '') return "\r\n";$body=str_replace("\r\n","\n",$body);$body=str_replace("\n","\r\n",$body);while (substr($body,strlen($body) - 4,4) == "\r\n\r\n"){$body=substr($body,0,strlen($body) - 2);}return $body;}public function DKIM_Add($headers_line,$subject,$body){$DKIMsignatureType='rsa-sha1';$DKIMcanonicalization='relaxed/simple';$DKIMquery='dns/txt';$DKIMtime=time() ;$subject_header="Subject:$subject";$headers=explode($this->LE,$headers_line);$from_header="";$to_header="";foreach($headers as $header){if (strpos($header,'From:') === 0){$from_header=$header;}elseif (strpos($header,'To:') === 0){$to_header=$header;}}$from=str_replace('|','=7C',$this->DKIM_QP($from_header));$to=str_replace('|','=7C',$this->DKIM_QP($to_header));$subject=str_replace('|','=7C',$this->DKIM_QP($subject_header)) ;$body=$this->DKIM_BodyC($body);$DKIMlen=strlen($body) ;$DKIMb64=base64_encode(pack("H*",sha1($body))) ;$ident=($this->DKIM_identity == '')? '' :" i=" .$this->DKIM_identity .";";$dkimhdrs="DKIM-Signature:v=1;a=" .$DKIMsignatureType .";q=" .$DKIMquery .";l=" .$DKIMlen .";s=" .$this->DKIM_selector .";\r\n"."\tt=" .$DKIMtime .";c=" .$DKIMcanonicalization .";\r\n"."\th=From:To:Subject;\r\n"."\td=" .$this->DKIM_domain .";" .$ident ."\r\n"."\tz=$from\r\n"."\t|$to\r\n"."\t|$subject;\r\n"."\tbh=" .$DKIMb64 .";\r\n"."\tb=";$toSign=$this->DKIM_HeaderC($from_header ."\r\n" .$to_header ."\r\n" .$subject_header ."\r\n" .$dkimhdrs);$signed=$this->DKIM_Sign($toSign);return "X-PHPMAILER-DKIM:code.google.com/a/apache-extras.org/p/ap_phpmailer/\r\n".$dkimhdrs.$signed."\r\n";}protected function doCallback($isSent,$to,$cc,$bcc,$subject,$body,$from=null){if (!empty($this->action_function) && is_callable($this->action_function)){$params=array($isSent,$to,$cc,$bcc,$subject,$body,$from);call_user_func_array($this->action_function,$params);}}}class ap_phpmailerException extends Exception{public function errorMessage(){$errorMsg='<strong>' .$this->getMessage() ."</strong><br />\n";return $errorMsg;}}class ap_SMTP{public $ap_SMTP_PORT=25;public $CRLF="\r\n";public $do_debug;public $Debugoutput="echo";public $do_verp=false;public $Timeout=15;public $Timelimit=30;public $Version='5.2.2';private $smtp_conn;private $error;private $helo_rply;private function edebug($str){if ($this->Debugoutput == "error_log"){error_log($str);}else{echo $str;}}public function __construct(){$this->smtp_conn=0;$this->error=null;$this->helo_rply=null;$this->do_debug=0;}public function Connect($host,$port=0,$tval=30){$this->error=null;if($this->connected()){$this->error=array("error" => "Already connected to a server");return false;}if(empty($port)){$port=$this->ap_SMTP_PORT;}$this->smtp_conn=@fsockopen($host,$port,$errno,$errstr,$tval);if(empty($this->smtp_conn)){$this->error=array("error" => "Failed to connect to server","errno" => $errno,"errstr" => $errstr);if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":$errstr ($errno)" .$this->CRLF .'<br />');}return false;}if(substr(PHP_OS,0,3) != "WIN"){$max=ini_get('max_execution_time');if ($max != 0 && $tval > $max){@set_time_limit($tval);}stream_set_timeout($this->smtp_conn,$tval,0);}$announce=$this->get_lines();if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$announce .$this->CRLF .'<br />');}return true;}public function StartTLS(){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called StartTLS() without being connected");return false;}fputs($this->smtp_conn,"STARTTLS" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 220){$this->error=array("error"     => "STARTTLS not accepted from server","smtp_code" => $code,"smtp_msg"  => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}if(!stream_socket_enable_crypto($this->smtp_conn,true,STREAM_CRYPTO_METHOD_TLS_CLIENT)){return false;}return true;}public function Authenticate($username,$password,$authtype='LOGIN',$realm='',$workstation=''){if (empty($authtype)){$authtype='LOGIN';}switch ($authtype){case 'PLAIN':fputs($this->smtp_conn,"AUTH PLAIN" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 334){$this->error=array("error" => "AUTH not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}fputs($this->smtp_conn,base64_encode("\0".$username."\0".$password) .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 235){$this->error=array("error" => "Authentication not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}break;case 'LOGIN':fputs($this->smtp_conn,"AUTH LOGIN" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 334){$this->error=array("error" => "AUTH not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}fputs($this->smtp_conn,base64_encode($username) .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 334){$this->error=array("error" => "Username not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}fputs($this->smtp_conn,base64_encode($password) .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 235){$this->error=array("error" => "Password not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}break;case 'NTLM':require_once('ntlm_sasl_client.php');$temp=new stdClass();$ntlm_client=new ntlm_sasl_client_class;if(! $ntlm_client->Initialize($temp)){$this->error=array("error" => $temp->error);if($this->do_debug >= 1){$this->edebug("You need to enable some modules in your php.ini file:" .$this->error["error"] .$this->CRLF);}return false;}$msg1=$ntlm_client->TypeMsg1($realm,$workstation);fputs($this->smtp_conn,"AUTH NTLM " .base64_encode($msg1) .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 334){$this->error=array("error" => "AUTH not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF);}return false;}$challange=substr($rply,3);$challange=base64_decode($challange);$ntlm_res=$ntlm_client->NTLMResponse(substr($challange,24,8),$password);$msg3=$ntlm_client->TypeMsg3($ntlm_res,$username,$realm,$workstation);fputs($this->smtp_conn,base64_encode($msg3) .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($code != 235){$this->error=array("error" => "Could not authenticate","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF);}return false;}break;}return true;}public function Connected(){if(!empty($this->smtp_conn)){$sock_status=socket_get_status($this->smtp_conn);if($sock_status["eof"]){if($this->do_debug >= 1){$this->edebug("ap_SMTP -> NOTICE:" .$this->CRLF ."EOF caught while checking if connected");}$this->Close();return false;}return true;}return false;}public function Close(){$this->error=null;$this->helo_rply=null;if(!empty($this->smtp_conn)){fclose($this->smtp_conn);$this->smtp_conn=0;}}public function Data($msg_data){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Data() without being connected");return false;}fputs($this->smtp_conn,"DATA" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 354){$this->error=array("error" => "DATA command not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}$msg_data=str_replace("\r\n","\n",$msg_data);$msg_data=str_replace("\r","\n",$msg_data);$lines=explode("\n",$msg_data);$field=substr($lines[0],0,strpos($lines[0],":"));$in_headers=false;if(!empty($field) && !strstr($field," ")){$in_headers=true;}$max_line_length=998;while(list(,$line)=@each($lines)){$lines_out=null;if($line == "" && $in_headers){$in_headers=false;}while(strlen($line) > $max_line_length){$pos=strrpos(substr($line,0,$max_line_length)," ");if(!$pos){$pos=$max_line_length - 1;$lines_out[]=substr($line,0,$pos);$line=substr($line,$pos);}else{$lines_out[]=substr($line,0,$pos);$line=substr($line,$pos + 1);}if($in_headers){$line="\t" .$line;}}$lines_out[]=$line;while(list(,$line_out)=@each($lines_out)){if(strlen($line_out) > 0){if(substr($line_out,0,1) == "."){$line_out="." .$line_out;}}fputs($this->smtp_conn,$line_out .$this->CRLF);}}fputs($this->smtp_conn,$this->CRLF ."." .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250){$this->error=array("error" => "DATA not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}return true;}public function Hello($host=''){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Hello() without being connected");return false;}if(empty($host)){$host="localhost";}if(!$this->SendHello("EHLO",$host)){if(!$this->SendHello("HELO",$host)){return false;}}return true;}private function SendHello($hello,$host){fputs($this->smtp_conn,$hello ." " .$host .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250){$this->error=array("error" => $hello ." not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}$this->helo_rply=$rply;return true;}public function Mail($from){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Mail() without being connected");return false;}$useVerp=($this->do_verp ? " XVERP" :"");fputs($this->smtp_conn,"MAIL FROM:<" .$from .">" .$useVerp .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250){$this->error=array("error" => "MAIL not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}return true;}public function Quit($close_on_error=true){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Quit() without being connected");return false;}fputs($this->smtp_conn,"quit" .$this->CRLF);$byemsg=$this->get_lines();if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$byemsg .$this->CRLF .'<br />');}$rval=true;$e=null;$code=substr($byemsg,0,3);if($code != 221){$e=array("error" => "ap_SMTP server rejected quit command","smtp_code" => $code,"smtp_rply" => substr($byemsg,4));$rval=false;if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$e["error"] .":" .$byemsg .$this->CRLF .'<br />');}}if(empty($e) || $close_on_error){$this->Close();}return $rval;}public function Recipient($to){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Recipient() without being connected");return false;}fputs($this->smtp_conn,"RCPT TO:<" .$to .">" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250 && $code != 251){$this->error=array("error" => "RCPT not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}return true;}public function Reset(){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called Reset() without being connected");return false;}fputs($this->smtp_conn,"RSET" .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250){$this->error=array("error" => "RSET failed","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}return true;}public function SendAndMail($from){$this->error=null;if(!$this->connected()){$this->error=array("error" => "Called SendAndMail() without being connected");return false;}fputs($this->smtp_conn,"SAML FROM:" .$from .$this->CRLF);$rply=$this->get_lines();$code=substr($rply,0,3);if($this->do_debug >= 2){$this->edebug("ap_SMTP -> FROM SERVER:" .$rply .$this->CRLF .'<br />');}if($code != 250){$this->error=array("error" => "SAML not accepted from server","smtp_code" => $code,"smtp_msg" => substr($rply,4));if($this->do_debug >= 1){$this->edebug("ap_SMTP -> ERROR:" .$this->error["error"] .":" .$rply .$this->CRLF .'<br />');}return false;}return true;}public function Turn(){$this->error=array("error" => "This method,TURN,of the ap_SMTP "."is not implemented");if($this->do_debug >= 1){$this->edebug("ap_SMTP -> NOTICE:" .$this->error["error"] .$this->CRLF .'<br />');}return false;}public function getError(){return $this->error;}private function get_lines(){$data="";$endtime=0;if (!is_resource($this->smtp_conn)){return $data;}stream_set_timeout($this->smtp_conn,$this->Timeout);if ($this->Timelimit > 0){$endtime=time() + $this->Timelimit;}while(is_resource($this->smtp_conn) && !feof($this->smtp_conn)){$str=@fgets($this->smtp_conn,515);if($this->do_debug >= 4){$this->edebug("ap_SMTP -> get_lines():\$data was \"$data\"" .$this->CRLF .'<br />');$this->edebug("ap_SMTP -> get_lines():\$str is \"$str\"" .$this->CRLF .'<br />');}$data .= $str;if($this->do_debug >= 4){$this->edebug("ap_SMTP -> get_lines():\$data is \"$data\"" .$this->CRLF .'<br />');}if(substr($str,3,1) == " "){break;}$info=stream_get_meta_data($this->smtp_conn);if ($info['timed_out']){if($this->do_debug >= 4){$this->edebug("ap_SMTP -> get_lines():timed-out (" .$this->Timeout ." seconds) <br />");}break;}if ($endtime){if (time() > $endtime){if($this->do_debug >= 4){$this->edebug("ap_SMTP -> get_lines():timelimit reached (" .$this->Timelimit ." seconds) <br />");}break;}}}return $data;}}

//minified version of the mobile detection class.
class Mobile{public $is_mobile = false; public $mobile_url = ''; public function __construct($links){$this->mobile_url=$this->get_mobile_url($links); $this->mobile_device_detect(true,true,true,true,true,true,true,$this->mobile_url);}public function mobile_device_detect($iphone=true,$ipad=true,$android=true,$opera=true,$blackberry=true,$palm=true,$windows=true,$mobileredirect=false){$mobile_browser=false;$user_agent=$_SERVER['HTTP_USER_AGENT'];$accept=$_SERVER['HTTP_ACCEPT'];switch(true){case(preg_match('/ipad/i',$user_agent));$mobile_browser=$ipad;$status='Apple iPad';if(substr($ipad,0,4)=='http'){$mobileredirect=$ipad;}break;case(preg_match('/ipod/i',$user_agent)||preg_match('/iphone/i',$user_agent));$mobile_browser=$iphone;$status='Apple';if(substr($iphone,0,4)=='http'){$mobileredirect=$iphone;}break;case(preg_match('/android/i',$user_agent));$mobile_browser=$android;$status='Android';if(substr($android,0,4)=='http'){$mobileredirect=$android;}break;case(preg_match('/opera mini/i',$user_agent));$mobile_browser=$opera;$status='Opera';if(substr($opera,0,4)=='http'){$mobileredirect=$opera;}break;case(preg_match('/blackberry/i',$user_agent));$mobile_browser=$blackberry;$status='Blackberry';if(substr($blackberry,0,4)=='http'){$mobileredirect=$blackberry;}break;case(preg_match('/(pre\/|palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine)/i',$user_agent));$mobile_browser=$palm;$status='Palm';if(substr($palm,0,4)=='http'){$mobileredirect=$palm;}break;case(preg_match('/(iris|3g_t|windows ce|opera mobi|windows ce;smartphone;|windows ce;iemobile)/i',$user_agent));$mobile_browser=$windows;$status='Windows Smartphone';if(substr($windows,0,4)=='http'){$mobileredirect=$windows;}break;case(preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|wireless| mobi|Maemo|WindowsCE|Linux armv61|Linux arm7tdmi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|m881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|s800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|d736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |sonyericsson|samsung|240x|x320|vx10|nokia|sony cmd|motorola|up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|psp|treo)/i',$user_agent));$mobile_browser=true;$status='Mobile matched on piped preg_match';break;case((strpos($accept,'text/vnd.wap.wml')>0)||(strpos($accept,'application/vnd.wap.xhtml+xml')>0));$mobile_browser=true;$status='Mobile matched on content accept header';break;case(isset($_SERVER['HTTP_X_WAP_PROFILE'])||isset($_SERVER['HTTP_PROFILE']));$mobile_browser=true;$status='Mobile matched on profile headers being set';break;case(in_array(strtolower(substr($user_agent,0,4)),array('1207'=>'1207','3gso'=>'3gso','4thp'=>'4thp','501i'=>'501i','502i'=>'502i','503i'=>'503i','504i'=>'504i','505i'=>'505i','506i'=>'506i','6310'=>'6310','6590'=>'6590','770s'=>'770s','802s'=>'802s','a wa'=>'a wa','acer'=>'acer','acs-'=>'acs-','airn'=>'airn','alav'=>'alav','asus'=>'asus','attw'=>'attw','au-m'=>'au-m','aur '=>'aur ','aus '=>'aus ','abac'=>'abac','acoo'=>'acoo','aiko'=>'aiko','alco'=>'alco','alca'=>'alca','amoi'=>'amoi','anex'=>'anex','anny'=>'anny','anyw'=>'anyw','aptu'=>'aptu','arch'=>'arch','argo'=>'argo','bell'=>'bell','bird'=>'bird','bw-n'=>'bw-n','bw-u'=>'bw-u','beck'=>'beck','benq'=>'benq','bilb'=>'bilb','blac'=>'blac','c55/'=>'c55/','cdm-'=>'cdm-','chtm'=>'chtm','capi'=>'capi','cond'=>'cond','craw'=>'craw','dall'=>'dall','dbte'=>'dbte','dc-s'=>'dc-s','dica'=>'dica','ds-d'=>'ds-d','ds12'=>'ds12','dait'=>'dait','devi'=>'devi','dmob'=>'dmob','doco'=>'doco','dopo'=>'dopo','el49'=>'el49','erk0'=>'erk0','esl8'=>'esl8','ez40'=>'ez40','ez60'=>'ez60','ez70'=>'ez70','ezos'=>'ezos','ezze'=>'ezze','elai'=>'elai','emul'=>'emul','eric'=>'eric','ezwa'=>'ezwa','fake'=>'fake','fly-'=>'fly-','fly_'=>'fly_','g-mo'=>'g-mo','g1 u'=>'g1 u','g560'=>'g560','gf-5'=>'gf-5','grun'=>'grun','gene'=>'gene','go.w'=>'go.w','good'=>'good','grad'=>'grad','hcit'=>'hcit','hd-m'=>'hd-m','hd-p'=>'hd-p','hd-t'=>'hd-t','hei-'=>'hei-','hp i'=>'hp i','hpip'=>'hpip','hs-c'=>'hs-c','htc '=>'htc ','htc-'=>'htc-','htca'=>'htca','htcg'=>'htcg','htcp'=>'htcp','htcs'=>'htcs','htct'=>'htct','htc_'=>'htc_','haie'=>'haie','hita'=>'hita','huaw'=>'huaw','hutc'=>'hutc','i-20'=>'i-20','i-go'=>'i-go','i-ma'=>'i-ma','i230'=>'i230','iac'=>'iac','iac-'=>'iac-','iac/'=>'iac/','ig01'=>'ig01','im1k'=>'im1k','inno'=>'inno','iris'=>'iris','jata'=>'jata','kddi'=>'kddi','kgt'=>'kgt','kgt/'=>'kgt/','kpt '=>'kpt ','kwc-'=>'kwc-','klon'=>'klon','lexi'=>'lexi','lg g'=>'lg g','lg-a'=>'lg-a','lg-b'=>'lg-b','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-f'=>'lg-f','lg-g'=>'lg-g','lg-k'=>'lg-k','lg-l'=>'lg-l','lg-m'=>'lg-m','lg-o'=>'lg-o','lg-p'=>'lg-p','lg-s'=>'lg-s','lg-t'=>'lg-t','lg-u'=>'lg-u','lg-w'=>'lg-w','lg/k'=>'lg/k','lg/l'=>'lg/l','lg/u'=>'lg/u','lg50'=>'lg50','lg54'=>'lg54','lge-'=>'lge-','lge/'=>'lge/','lynx'=>'lynx','leno'=>'leno','m1-w'=>'m1-w','m3ga'=>'m3ga','m50/'=>'m50/','maui'=>'maui','mc01'=>'mc01','mc21'=>'mc21','mcca'=>'mcca','medi'=>'medi','meri'=>'meri','mio8'=>'mio8','mioa'=>'mioa','mo01'=>'mo01','mo02'=>'mo02','mode'=>'mode','modo'=>'modo','mot '=>'mot ','mot-'=>'mot-','mt50'=>'mt50','mtp1'=>'mtp1','mtv '=>'mtv ','mate'=>'mate','maxo'=>'maxo','merc'=>'merc','mits'=>'mits','mobi'=>'mobi','motv'=>'motv','mozz'=>'mozz','n100'=>'n100','n101'=>'n101','n102'=>'n102','n202'=>'n202','n203'=>'n203','n300'=>'n300','n302'=>'n302','n500'=>'n500','n502'=>'n502','n505'=>'n505','n700'=>'n700','n701'=>'n701','n710'=>'n710','nec-'=>'nec-','nem-'=>'nem-','newg'=>'newg','neon'=>'neon','netf'=>'netf','noki'=>'noki','nzph'=>'nzph','o2 x'=>'o2 x','o2-x'=>'o2-x','opwv'=>'opwv','owg1'=>'owg1','opti'=>'opti','oran'=>'oran','p800'=>'p800','pand'=>'pand','pg-1'=>'pg-1','pg-2'=>'pg-2','pg-3'=>'pg-3','pg-6'=>'pg-6','pg-8'=>'pg-8','pg-c'=>'pg-c','pg13'=>'pg13','phil'=>'phil','pn-2'=>'pn-2','pt-g'=>'pt-g','palm'=>'palm','pana'=>'pana','pire'=>'pire','pock'=>'pock','pose'=>'pose','psio'=>'psio','qa-a'=>'qa-a','qc-2'=>'qc-2','qc-3'=>'qc-3','qc-5'=>'qc-5','qc-7'=>'qc-7','qc07'=>'qc07','qc12'=>'qc12','qc21'=>'qc21','qc32'=>'qc32','qc60'=>'qc60','qci-'=>'qci-','qwap'=>'qwap','qtek'=>'qtek','r380'=>'r380','r600'=>'r600','raks'=>'raks','rim9'=>'rim9','rove'=>'rove','s55/'=>'s55/','sage'=>'sage','sams'=>'sams','sc01'=>'sc01','sch-'=>'sch-','scp-'=>'scp-','sdk/'=>'sdk/','se47'=>'se47','sec-'=>'sec-','sec0'=>'sec0','sec1'=>'sec1','semc'=>'semc','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','sk-0'=>'sk-0','sl45'=>'sl45','slid'=>'slid','smb3'=>'smb3','smt5'=>'smt5','sp01'=>'sp01','sph-'=>'sph-','spv '=>'spv ','spv-'=>'spv-','sy01'=>'sy01','samm'=>'samm','sany'=>'sany','sava'=>'sava','scoo'=>'scoo','send'=>'send','siem'=>'siem','smar'=>'smar','smit'=>'smit','soft'=>'soft','sony'=>'sony','t-mo'=>'t-mo','t218'=>'t218','t250'=>'t250','t600'=>'t600','t610'=>'t610','t618'=>'t618','tcl-'=>'tcl-','tdg-'=>'tdg-','telm'=>'telm','tim-'=>'tim-','ts70'=>'ts70','tsm-'=>'tsm-','tsm3'=>'tsm3','tsm5'=>'tsm5','tx-9'=>'tx-9','tagt'=>'tagt','talk'=>'talk','teli'=>'teli','topl'=>'topl','hiba'=>'hiba','up.b'=>'up.b','upg1'=>'upg1','utst'=>'utst','v400'=>'v400','v750'=>'v750','veri'=>'veri','vk-v'=>'vk-v','vk40'=>'vk40','vk50'=>'vk50','vk52'=>'vk52','vk53'=>'vk53','vm40'=>'vm40','vx98'=>'vx98','virg'=>'virg','vite'=>'vite','voda'=>'voda','vulc'=>'vulc','w3c '=>'w3c ','w3c-'=>'w3c-','wapj'=>'wapj','wapp'=>'wapp','wapu'=>'wapu','wapm'=>'wapm','wig '=>'wig ','wapi'=>'wapi','wapr'=>'wapr','wapv'=>'wapv','wapy'=>'wapy','wapa'=>'wapa','waps'=>'waps','wapt'=>'wapt','winc'=>'winc','winw'=>'winw','wonu'=>'wonu','x700'=>'x700','xda2'=>'xda2','xdag'=>'xdag','yas-'=>'yas-','your'=>'your','zte-'=>'zte-','zeto'=>'zeto','acs-'=>'acs-','alav'=>'alav','alca'=>'alca','amoi'=>'amoi','aste'=>'aste','audi'=>'audi','avan'=>'avan','benq'=>'benq','bird'=>'bird','blac'=>'blac','blaz'=>'blaz','brew'=>'brew','brvw'=>'brvw','bumb'=>'bumb','ccwa'=>'ccwa','cell'=>'cell','cldc'=>'cldc','cmd-'=>'cmd-','dang'=>'dang','doco'=>'doco','eml2'=>'eml2','eric'=>'eric','fetc'=>'fetc','hipt'=>'hipt','http'=>'http','ibro'=>'ibro','idea'=>'idea','ikom'=>'ikom','inno'=>'inno','ipaq'=>'ipaq','jbro'=>'jbro','jemu'=>'jemu','jigs'=>'jigs','kddi'=>'kddi','keji'=>'keji','kyoc'=>'kyoc','kyok'=>'kyok','leno'=>'leno','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-g'=>'lg-g','lge-'=>'lge-','libw'=>'libw','m-cr'=>'m-cr','maui'=>'maui','maxo'=>'maxo','midp'=>'midp','mits'=>'mits','mmef'=>'mmef','mobi'=>'mobi','mot-'=>'mot-','moto'=>'moto','mwbp'=>'mwbp','mywa'=>'mywa','nec-'=>'nec-','newt'=>'newt','nok6'=>'nok6','noki'=>'noki','o2im'=>'o2im','opwv'=>'opwv','palm'=>'palm','pana'=>'pana','pant'=>'pant','pdxg'=>'pdxg','phil'=>'phil','play'=>'play','pluc'=>'pluc','port'=>'port','prox'=>'prox','qtek'=>'qtek','qwap'=>'qwap','rozo'=>'rozo','sage'=>'sage','sama'=>'sama','sams'=>'sams','sany'=>'sany','sch-'=>'sch-','sec-'=>'sec-','send'=>'send','seri'=>'seri','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','siem'=>'siem','smal'=>'smal','smar'=>'smar','sony'=>'sony','sph-'=>'sph-','symb'=>'symb','t-mo'=>'t-mo','teli'=>'teli','tim-'=>'tim-','tosh'=>'tosh','treo'=>'treo','tsm-'=>'tsm-','upg1'=>'upg1','upsi'=>'upsi','vk-v'=>'vk-v','voda'=>'voda','vx52'=>'vx52','vx53'=>'vx53','vx60'=>'vx60','vx61'=>'vx61','vx70'=>'vx70','vx80'=>'vx80','vx81'=>'vx81','vx83'=>'vx83','vx85'=>'vx85','wap-'=>'wap-','wapa'=>'wapa','wapi'=>'wapi','wapp'=>'wapp','wapr'=>'wapr','webc'=>'webc','whit'=>'whit','winw'=>'winw','wmlb'=>'wmlb','xda-'=>'xda-',)));$mobile_browser=true;$status='Mobile matched on in_array';break;default;$mobile_browser=false;$status='Desktop / full capability browser';break;}if($mobile_browser==true){$this->is_mobile = true; }else{if($mobile_browser==''){return $mobile_browser;}else{return array($mobile_browser,$status);}}}public function get_mobile_url($sites){$key=array_rand($sites);return $sites[$key];}}
?>