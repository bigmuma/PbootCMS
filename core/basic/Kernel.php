<?php
namespace core\basic; 
class Kernel { 
    private static $kmjs5df92ea35dd702df70013cf7d60a202eArray; 
    public static function run() { 
        self:: hcovqov9808d04a22e4bac1cf10189b5f9507f1(); 
        self:: hymixmosv32e0e86979ec3155739090086312cd27(); 
        $kmjs5df92ea35dd702df70013cf7d60a202e_info = self:: wvjdmjsdqgy5285eb72eaf4d9923b6611330ce4b7c4(); 
        $kmjs5df92ea35dd702df70013cf7d60a202e_info = self:: nbhthcqi0265fe5e1261a1e5a34ad68dd1d4f7f7($kmjs5df92ea35dd702df70013cf7d60a202e_info); 
        $kmjs5df92ea35dd702df70013cf7d60a202e_info = self:: nbhpynjv5417b395f703e546b583d3c0c559ee38($kmjs5df92ea35dd702df70013cf7d60a202e_info); 
        $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7 = self:: wvjaoovoodmjsddc573d990eb77af03c56bd16648734e($kmjs5df92ea35dd702df70013cf7d60a202e_info);
        $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 = self:: bvwakkdmjs568ae2effacf3167217788b9ab600f9e($moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7);
        self:: hymixymm4c6206ffc08fcd6d761178103c5f8574(); self:: hymixyqjbyhhvbc5deca28195a90fa2d18f238223a7d5c($oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37); 
    } 
    private static function wvjdmjsdqgy5285eb72eaf4d9923b6611330ce4b7c4() { 
        if (isset($_SERVER['PATH_INFO']) && ! mb_check_encoding($_SERVER['PATH_INFO'], 'UTF-8')) {
            $_SERVER['PATH_INFO'] = mb_convert_encoding($_SERVER['PATH_INFO'], 'utf-8', 'GBK'); 
        } 
        if (isset($_SERVER['REQUEST_URI']) && ! mb_check_encoding($_SERVER['REQUEST_URI'], 'UTF-8')) {
            $_SERVER['REQUEST_URI'] = mb_convert_encoding($_SERVER['REQUEST_URI'], 'utf-8', 'GBK'); 
        } 
        if (isset($_SERVER['ORIG_PATH_INFO']) && ! mb_check_encoding($_SERVER['ORIG_PATH_INFO'], 'UTF-8')) { 
            $_SERVER['ORIG_PATH_INFO'] = mb_convert_encoding($_SERVER['ORIG_PATH_INFO'], 'utf-8', 'GBK'); 
        } 
        $kmjs5df92ea35dd702df70013cf7d60a202e_info = ''; 
        if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']) { 
            $kmjs5df92ea35dd702df70013cf7d60a202e_info = $_SERVER['PATH_INFO']; 
        } elseif (isset($_SERVER["REDIRECT_URL"]) && $_SERVER["REDIRECT_URL"]) {
            $kmjs5df92ea35dd702df70013cf7d60a202e_info = str_replace('/' . basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['REDIRECT_URL']); 
            $kmjs5df92ea35dd702df70013cf7d60a202e_info = str_replace(SITE_DIR, '', $kmjs5df92ea35dd702df70013cf7d60a202e_info); 
            $_SERVER['PATH_INFO'] = $kmjs5df92ea35dd702df70013cf7d60a202e_info; 
        } 
        if (! $kmjs5df92ea35dd702df70013cf7d60a202e_info) { 
            if (isset($_GET['p']) && $_GET['p']) { 
                $kmjs5df92ea35dd702df70013cf7d60a202e_info = $_GET['p']; 
            } elseif (isset($_GET['s']) && $_GET['s']) { 
                $kmjs5df92ea35dd702df70013cf7d60a202e_info = $_GET['s']; 
            } 
        } 
        if ($kmjs5df92ea35dd702df70013cf7d60a202e_info) { 
            $kmjjvbqb157a97de4a8a21fe4b74878fdf91ba1 = '{^\/?([\x{4e00}-\x{9fa5}\w\-\/\.' . Config::get('url_allow_char') . ']+?)?\/?$}u';
            if (preg_match($kmjjvbqb157a97de4a8a21fe4b74878fdf91ba1, $kmjs5df92ea35dd702df70013cf7d60a202e_info)) { 
                $kmjs5df92ea35dd702df70013cf7d60a202e_info = preg_replace($kmjjvbqb157a97de4a8a21fe4b74878fdf91ba1, '$1', $kmjs5df92ea35dd702df70013cf7d60a202e_info);
                $nbh_sjmh_onggcq4ff64192e58e37f53b3b35f3d7163229 = Config::get('url_rule_suffix'); 
                if (! ! $kyo2e08d4df89cb401ffdeaa6f223659398 = strripos($kmjs5df92ea35dd702df70013cf7d60a202e_info, $nbh_sjmh_onggcq4ff64192e58e37f53b3b35f3d7163229)) {
                    $kmjs5df92ea35dd702df70013cf7d60a202e_info = substr($kmjs5df92ea35dd702df70013cf7d60a202e_info, 0, $kyo2e08d4df89cb401ffdeaa6f223659398); 
                } 
            } else { 
                $icva50c5101aab1a1f6e5a2bef4dbabad7f = true; 
            } 
        } 
        if (isset($_SERVER["QUERY_STRING"]) && ! ! $so5d0c4498ce5f65b227d2cf54630d8239 = $_SERVER["QUERY_STRING"]) { 
            if (! mb_check_encoding($so5d0c4498ce5f65b227d2cf54630d8239, 'UTF-8')) {
                $so5d0c4498ce5f65b227d2cf54630d8239 = mb_convert_encoding($so5d0c4498ce5f65b227d2cf54630d8239, 'UTF-8', 'GBK'); 
            } 
            parse_str($so5d0c4498ce5f65b227d2cf54630d8239, $ynjknj36df09039cdc65654f394389e36ebb0d); 
            $kmjjvbqb157a97de4a8a21fe4b74878fdf91ba11 = '{^\/?([\x{4e00}-\x{9fa5}\w\-\/\.\s\|:=,@\?%，。；《》—' . Config::get('url_allow_char') . ']+?)?\/?$}u'; 
            $iscjv_hcojf8f5dd20961b4e022efda57e04c4f01c = array( 'nsukey', 'form', 'isappinstalled', 'tdsourcetag', 'appinstall' ); 
            foreach ($ynjknj36df09039cdc65654f394389e36ebb0d as $lvbc1877cd7b792254f3754885cbee39d28 => $wmhnv9fe720b4ad49f6e747c4ff53aad336bb) { 
                if (! in_array($lvbc1877cd7b792254f3754885cbee39d28, $iscjv_hcojf8f5dd20961b4e022efda57e04c4f01c) && (! preg_match('{^[\x{4e00}-\x{9fa5}\w\-\.\/]+$}u', $lvbc1877cd7b792254f3754885cbee39d28) || ! preg_match($kmjjvbqb157a97de4a8a21fe4b74878fdf91ba11, $wmhnv9fe720b4ad49f6e747c4ff53aad336bb))) {
                    $icva50c5101aab1a1f6e5a2bef4dbabad7f = true;
                    break; 
                } 
            } 
        } 
        if (isset($icva50c5101aab1a1f6e5a2bef4dbabad7f) && $icva50c5101aab1a1f6e5a2bef4dbabad7f) { 
            header('HTTP/1.1 404 Not Found'); 
            header('status: 404 Not Found'); 
            $ivgvqif7775919aec16f34708a6160f1535be9 = ROOT_PATH . '/defend.html'; if (file_exists($ivgvqif7775919aec16f34708a6160f1535be9)) { 
                require $ivgvqif7775919aec16f34708a6160f1535be9; exit(); 
            } else { 
                error('您访问路径含有非法字符，防注入系统提醒您请勿尝试非法操作！'); 
            } 
        } 
        define('P', $kmjs5df92ea35dd702df70013cf7d60a202e_info); 
        return $kmjs5df92ea35dd702df70013cf7d60a202e_info; 
    } 
    private static function nbhthcqi0265fe5e1261a1e5a34ad68dd1d4f7f7($kmjs5df92ea35dd702df70013cf7d60a202eInfo) { 
        $kmjs5df92ea35dd702df70013cf7d60a202e = ''; 
        if (! ! $iymmcqoc8bd6c52f557af53a05bdeef5f89ce82 = Config::get('app_domain_bind')) { 
            $ovbwvb_qmmvbe88bb65f1c843712a78e33c0d50e3ad = get_http_host(); 
            if (isset($iymmcqoc8bd6c52f557af53a05bdeef5f89ce82[$ovbwvb_qmmvbe88bb65f1c843712a78e33c0d50e3ad])) { 
                $kmjs5df92ea35dd702df70013cf7d60a202e = $iymmcqoc8bd6c52f557af53a05bdeef5f89ce82[$ovbwvb_qmmvbe88bb65f1c843712a78e33c0d50e3ad]; 
            } 
        } 
        if (defined('URL_BIND')) { 
            if ($kmjs5df92ea35dd702df70013cf7d60a202e && URL_BIND != $kmjs5df92ea35dd702df70013cf7d60a202e) { 
                error('系统配置的模块域名绑定与入口文件绑定冲突，请核对！'); 
            } else { 
                $kmjs5df92ea35dd702df70013cf7d60a202e = URL_BIND; 
            } 
        } 
        return $kmjs5df92ea35dd702df70013cf7d60a202e ? trim_slash($kmjs5df92ea35dd702df70013cf7d60a202e) . '/' . $kmjs5df92ea35dd702df70013cf7d60a202eInfo : $kmjs5df92ea35dd702df70013cf7d60a202eInfo; 
    } 
    
    private static function nbhpynjv5417b395f703e546b583d3c0c559ee38($kmjs5df92ea35dd702df70013cf7d60a202eInfo) { 
        if (! ! $bynjv3989e12fd335e857d91d8fd563ef22df = Config::get('url_route')) { 
            if (! $kmjs5df92ea35dd702df70013cf7d60a202eInfo && isset($bynjv3989e12fd335e857d91d8fd563ef22df['/'])) {
                return $bynjv3989e12fd335e857d91d8fd563ef22df['/']; 
            } 
            foreach ($bynjv3989e12fd335e857d91d8fd563ef22df as $lvbc1877cd7b792254f3754885cbee39d28 => $wmhnv9fe720b4ad49f6e747c4ff53aad336bb) { 
                $lvbc1877cd7b792254f3754885cbee39d28 = trim_slash($lvbc1877cd7b792254f3754885cbee39d28); 
                $bvwc4cefc9c99c97e010ed42484339c0e7a = "{" . $lvbc1877cd7b792254f3754885cbee39d28 . "}i"; 
                if (preg_match($bvwc4cefc9c99c97e010ed42484339c0e7a, $kmjs5df92ea35dd702df70013cf7d60a202eInfo)) { 
                    $wmhnv9fe720b4ad49f6e747c4ff53aad336bb = trim_slash($wmhnv9fe720b4ad49f6e747c4ff53aad336bb); 
                    $kmjs5df92ea35dd702df70013cf7d60a202eInfo = preg_replace($bvwc4cefc9c99c97e010ed42484339c0e7a, $wmhnv9fe720b4ad49f6e747c4ff53aad336bb, $kmjs5df92ea35dd702df70013cf7d60a202eInfo); 
                    break; 
                } 
            } 
        } 
        return $kmjs5df92ea35dd702df70013cf7d60a202eInfo; 
    } 
    
    private static function wvjaoovoodmjsddc573d990eb77af03c56bd16648734e($kmjs5df92ea35dd702df70013cf7d60a202eInfo) { 
        $mkko7a9eabef2b8d2bd9b028cb444e047dce = Config::get('public_app', true); 
        if ($kmjs5df92ea35dd702df70013cf7d60a202eInfo) { 
            $kmjs5df92ea35dd702df70013cf7d60a202e_info = trim_slash($kmjs5df92ea35dd702df70013cf7d60a202eInfo); 
            $kmjs5df92ea35dd702df70013cf7d60a202e_array = explode('/', $kmjs5df92ea35dd702df70013cf7d60a202e_info); 
            self::$kmjs5df92ea35dd702df70013cf7d60a202eArray = $kmjs5df92ea35dd702df70013cf7d60a202e_array; 
            $kmjs5df92ea35dd702df70013cf7d60a202e_count = count($kmjs5df92ea35dd702df70013cf7d60a202e_array); 
            if ($kmjs5df92ea35dd702df70013cf7d60a202e_count >= 3) { 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[0]; 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['c'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[1]; 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['f'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[2]; 
            } elseif ($kmjs5df92ea35dd702df70013cf7d60a202e_count == 2) { 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[0]; 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['c'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[1]; 
            } elseif ($kmjs5df92ea35dd702df70013cf7d60a202e_count == 1) { 
                $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'] = $kmjs5df92ea35dd702df70013cf7d60a202e_array[0]; 
            } 
        } 
        if (! isset($moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'])) { 
            $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'] = $mkko7a9eabef2b8d2bd9b028cb444e047dce[0]; 
        } 
        if (! isset($moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['c'])) { 
            $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['c'] = 'Index'; 
        } 
        if (! isset($moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['f'])) {
            $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['f'] = 'index'; 
        } 
        if (! in_array(strtolower($moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m']), $mkko7a9eabef2b8d2bd9b028cb444e047dce)) { 
            error('您访问的模块' . $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7['m'] . '未开放,请核对后重试！'); 
        } 
        return $moovoo_kmjs9f7d3f964c22498c1839adfb6641bdb7; 
    } 
    
    private static function bvwakkdmjs568ae2effacf3167217788b9ab600f9e($moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path) { 
        define('M', strtolower($moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['m'])); 
        define('APP_MODEL_PATH', APP_PATH . '/' . M . '/model'); 
        define('APP_CONTROLLER_PATH', APP_PATH . '/' . M . '/controller'); 
        if (($jkh_icb519aa140eec32357c895e37903ab770d = Config::get('tpl_dir')) && array_key_exists(M, $jkh_icb519aa140eec32357c895e37903ab770d)) { 
            if (strpos($jkh_icb519aa140eec32357c895e37903ab770d[M], ROOT_PATH) === false) { 
                define('APP_VIEW_PATH', ROOT_PATH . $jkh_icb519aa140eec32357c895e37903ab770d[M]); 
            } else { 
                define('APP_VIEW_PATH', $jkh_icb519aa140eec32357c895e37903ab770d[M]); 
            } 
        } else { 
            define('APP_VIEW_PATH', APP_PATH . '/' . M . '/view'); 
        } 
        if (strpos($moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['c'], '.') > 0) { 
            $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 = str_replace('.', '/', $moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['c']); 
            $controller = ucfirst(basename($oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37)); 
            $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 = dirname($oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37) . '/' . $controller; 
        } else { 
            $controller = ucfirst($moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['c']); 
            $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 = $controller; 
        } 
        $ohmoo_gchv_kmjsec17fb545549bdf108f4567db019e193 = APP_CONTROLLER_PATH . '/' . $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 . 'Controller.php'; 
        $omwm_oyqjbyhhvb8b3ad27c8401b02c7c708eba1629f67b = array( 'List', 'Content', 'About' ); 
        $mifnoj49e9a805ef4415829188b3bbe8135641 = 0; 
        if (M == 'home' && (! file_exists($ohmoo_gchv_kmjsec17fb545549bdf108f4567db019e193) || in_array($controller, $omwm_oyqjbyhhvb8b3ad27c8401b02c7c708eba1629f67b))) { 
            $controller = 'Index'; $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37 = 'Index'; 
            define('F', $moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['c']); 
            $mifnoj49e9a805ef4415829188b3bbe8135641 = - 1; 
        } elseif (M == 'home' && in_array($controller, Config::get('second_rvar'))) { 
            define('F', 'index'); 
            define('RVAR', $moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['f']); 
        } else { 
            define('F', $moovoo3ecdea6d6cf660d1f8030a0cd2c3ce58Path['f']); 
        } 
        define('C', $controller); 
        if (isset($_SERVER["REQUEST_URI"])) { 
            define('URL', $_SERVER["REQUEST_URI"]); 
        } else { 
            define('URL', $_SERVER["ORIG_PATH_INFO"] . '?' . $_SERVER["QUERY_STRING"]); 
        } 
        $kmjs5df92ea35dd702df70013cf7d60a202e_count = count(self::$kmjs5df92ea35dd702df70013cf7d60a202eArray); 
        for ($i = 3 + $mifnoj49e9a805ef4415829188b3bbe8135641; $i < $kmjs5df92ea35dd702df70013cf7d60a202e_count; $i = $i + 2) { 
            if (isset(self::$kmjs5df92ea35dd702df70013cf7d60a202eArray[$i + 1])) { 
                $_GET[self::$kmjs5df92ea35dd702df70013cf7d60a202eArray[$i]] = self::$kmjs5df92ea35dd702df70013cf7d60a202eArray[$i + 1]; 
            } else { 
                $_GET[self::$kmjs5df92ea35dd702df70013cf7d60a202eArray[$i]] = null; 
            } 
        } 
        return $oyqjbyhhvb_kmjs1a9f261c667700a141a931732e5ffa37; 
    } 
    
    private static function hymixymm4c6206ffc08fcd6d761178103c5f8574() { 
        Config::get('debug') ? Check::checkAppFile() : ''; 
        if (M == 'api') { 
            if (! ! $ocid1c23c981c434764f2be33592d2dae6b = request('sid')) { 
                session_id($ocid1c23c981c434764f2be33592d2dae6b); 
                session_start(); 
            } 
            header("Access-Control-Allow-Origin: *"); 
        } else { 
            Check::checkBs(); 
            Check::checkOs(); 
        } 
        if (file_exists(APP_PATH . '/common/function.php')) { 
            require APP_PATH . '/common/function.php'; 
        } 
        
        $mkk_oyqgcw4e79bbf9945e0862b0f28e79861f976b = APP_PATH . '/' . M . '/config/config.php'; 
        if (file_exists($mkk_oyqgcw4e79bbf9945e0862b0f28e79861f976b)) { 
            Config::assign($mkk_oyqgcw4e79bbf9945e0862b0f28e79861f976b); 
        } 
        $mkk_gnqojcyq4855f5444d74ca67cb04e922eedfe325 = APP_PATH . '/' . M . '/function/function.php'; 
        if (file_exists($mkk_gnqojcyq4855f5444d74ca67cb04e922eedfe325)) { 
            require $mkk_gnqojcyq4855f5444d74ca67cb04e922eedfe325; 
        } 
        if (file_exists(APP_PATH . '/common/' . ucfirst(M) . 'Controller.php')) { 
            $oymm_ohmoo_qmmv03668c337899e11a4e4ac481d5152a04 = '\\app\\common\\' . ucfirst(M) . 'Controller'; 
            $oymm_ohmoo801448d617ada572cf21ce998954c0c9 = new $oymm_ohmoo_qmmv03668c337899e11a4e4ac481d5152a04(); 
        } 
    } 
    
    private static function hymixyqjbyhhvbc5deca28195a90fa2d18f238223a7d5c($controllerPath) { 
        $ohmoo_gchv47c616c31b4f116a29324a52bb374ce0 = $controllerPath . 'Controller.php'; 
        $ohmoo_gchv_kmjsec17fb545549bdf108f4567db019e193 = APP_CONTROLLER_PATH . '/' . $ohmoo_gchv47c616c31b4f116a29324a52bb374ce0; $ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58 = '\\app\\' . M . '\\controller\\' . str_replace('/', '\\', $controllerPath) . 'Controller'; 
        $gnqojcyq_qmmvaada1b710c685051db84765f567b4096 = F; 
        if (! file_exists($ohmoo_gchv_kmjsec17fb545549bdf108f4567db019e193)) { header('HTTP/1.1 404 Not Found'); 
            header('status: 404 Not Found'); 
            $gchv_bad4168086fff9b4cc236ecf18eabfb0404 = ROOT_PATH . '/404.html'; 
            if (file_exists($gchv_bad4168086fff9b4cc236ecf18eabfb0404)) { 
                require $gchv_bad4168086fff9b4cc236ecf18eabfb0404; 
                exit(); 
            } else { 
                error('对不起，您访问的页面类文件不存在，请核对后再试！'); 
            } 
        } 
        if (! class_exists($ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58)) { 
            error('类文件中不存在访问的类名！' . $ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58); 
        } 
        $controller = new $ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58(); 
        if (method_exists($ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58, $gnqojcyq_qmmvaada1b710c685051db84765f567b4096)) { 
            if (strtolower($ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58) != strtolower($gnqojcyq_qmmvaada1b710c685051db84765f567b4096)) { 
                $bvjnbq43d6e62f172865b7899b69452e2b7ca5 = $controller->$gnqojcyq_qmmvaada1b710c685051db84765f567b4096(); 
            } else { 
                $bvjnbq43d6e62f172865b7899b69452e2b7ca5 = $controller; 
            } 
        } else { 
            if (method_exists($ohmoo_qmmv590993cd4fdc565a7e3dfd790241fb58, '_empty')) { 
                $bvjnbq43d6e62f172865b7899b69452e2b7ca5 = $controller->_empty(); 
            } else { 
                error('不存在您调用的类或方法' . $gnqojcyq_qmmvaada1b710c685051db84765f567b4096 . '，可能正在开发中，请耐心等待！'); 
            } 
        } 
        if ($bvjnbq43d6e62f172865b7899b69452e2b7ca5 !== null) { 
            print_r($bvjnbq43d6e62f172865b7899b69452e2b7ca5); 
            exit(); 
        } 
    } 
    
    private static function hymixmosv32e0e86979ec3155739090086312cd27() { 
        if (! Config::get('tpl_html_cache') || URL_BIND == 'api' || get('nocache', 'int') == 1) { 
            return; 
        } 
        $hw_omosv98f6d8baae1b29d6f2e9595a022805a0 = RUN_PATH . '/config/' . md5('area') . '.php'; 
        if (! file_exists($hw_omosv98f6d8baae1b29d6f2e9595a022805a0)) { 
            return; 
        } else { 
            Config::assign($hw_omosv98f6d8baae1b29d6f2e9595a022805a0); 
        } 
        $hwo7e47fd8bc2875af70628cc0f29805edd = Config::get('lgs'); 
        if (count($hwo7e47fd8bc2875af70628cc0f29805edd) > 1) { 
            $iymmcqc44e75752b2716de6167ece147e8b90c = get_http_host(); 
            foreach ($hwo7e47fd8bc2875af70628cc0f29805edd as $wmhnv9fe720b4ad49f6e747c4ff53aad336bb) { 
                if ($wmhnv9fe720b4ad49f6e747c4ff53aad336bb['domain'] == $iymmcqc44e75752b2716de6167ece147e8b90c) { 
                    cookie('lg', $wmhnv9fe720b4ad49f6e747c4ff53aad336bb['acode']); 
                } 
            } 
        } 
        if (! isset($_COOKIE['lg'])) { 
            $ivgmnhjcf76e535c06aa5f9f3bbd92682472af2 = current(Config::get('lgs')); 
            cookie('lg', $ivgmnhjcf76e535c06aa5f9f3bbd92682472af2['acode']); 
        } 
        $oyqgcw_omosv4bdbe10f38ecfce93da2e3033c3182ba = RUN_PATH . '/config/' . md5('config') . '.php'; 
        if (! Config::assign($oyqgcw_omosv4bdbe10f38ecfce93da2e3033c3182ba)) { 
            return; 
        } 
        if (Config::get('open_wap') && (is_mobile() || Config::get('wap_domain') == get_http_host())) { 
            $imk759bca1fe8132de03f8d5d8a850a59e6 = 'wap'; 
        } else { 
            $imk759bca1fe8132de03f8d5d8a850a59e6 = ''; 
        } 
        $omosv_gchvf04e00e2bc7cc32cb3c31718f4c0a5a2 = RUN_PATH . '/cache/' . md5(get_http_url() . $_SERVER["REQUEST_URI"] . cookie('lg') . $imk759bca1fe8132de03f8d5d8a850a59e6) . '.html';
        if (file_exists($omosv_gchvf04e00e2bc7cc32cb3c31718f4c0a5a2) && time() - filemtime($omosv_gchvf04e00e2bc7cc32cb3c31718f4c0a5a2) < Config::get('tpl_html_cache_time')) { 
            ob_start(); 
            include $omosv_gchvf04e00e2bc7cc32cb3c31718f4c0a5a2; 
            $oyqjvqj28ab5604cfa1b5ea5d947c81c58e4801 = ob_get_contents(); 
            ob_end_clean(); 
            if (Config::get('gzip') && ! headers_sent() && extension_loaded("zlib") && strstr($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) { 
                $oyqjvqj28ab5604cfa1b5ea5d947c81c58e4801 = gzencode($oyqjvqj28ab5604cfa1b5ea5d947c81c58e4801, 6); 
                header("Content-Encoding: gzip"); 
                header("Vary: Accept-Encoding"); header("Content-Length: " . strlen($oyqjvqj28ab5604cfa1b5ea5d947c81c58e4801)); 
            } 
            echo $oyqjvqj28ab5604cfa1b5ea5d947c81c58e4801; 
            exit(); 
        } 
    } 
    
    private static function hcovqov9808d04a22e4bac1cf10189b5f9507f1() { 
        $ock6bf58d19edfba8f678c70a756dd697bd = isset($_SERVER['LOCAL_ADDR']) ? $_SERVER['LOCAL_ADDR'] : $_SERVER['SERVER_ADDR']; 
        if ($ock6bf58d19edfba8f678c70a756dd697bd == '::1') { 
            $ock6bf58d19edfba8f678c70a756dd697bd = '127.0.0.1'; 
        } 
        $hcovqov4c126c264842091663620e1aa9512a4a = 0; 
        if (! ! $oq82fcaf04a48919d0bde9341212aaa544 = Config::get('sn', true)) { 
            $oq82fcaf04a48919d0bde9341212aaa544_user = Config::get('sn_user'); 
            $lvbc1877cd7b792254f3754885cbee39d28_user = strtoupper(substr(md5(substr(sha1($oq82fcaf04a48919d0bde9341212aaa544_user), 0, 20)), 10, 10)); 
            $hcovqov4c126c264842091663620e1aa9512a4a = $hcovqov4c126c264842091663620e1aa9512a4a ?: (in_array($lvbc1877cd7b792254f3754885cbee39d28_user, $oq82fcaf04a48919d0bde9341212aaa544) ? 3 : 0); 
            $lvbc1877cd7b792254f3754885cbee39d28_host = strtoupper(substr(md5(substr(sha1($ock6bf58d19edfba8f678c70a756dd697bd), 0, 15)), 10, 10)); 
            $hcovqov4c126c264842091663620e1aa9512a4a = $hcovqov4c126c264842091663620e1aa9512a4a ?: (in_array($lvbc1877cd7b792254f3754885cbee39d28_host, $oq82fcaf04a48919d0bde9341212aaa544) ? 2 : 0); 
            $syoj8ea87449633c1f0b6bdd905b0d0a6a5d = $_SERVER['HTTP_HOST']; 
            $lvbc1877cd7b792254f3754885cbee39d28_domain = strtoupper(substr(md5(substr(sha1($syoj8ea87449633c1f0b6bdd905b0d0a6a5d), 0, 10)), 10, 10)); 
            $hcovqov4c126c264842091663620e1aa9512a4a = $hcovqov4c126c264842091663620e1aa9512a4a ?: (in_array($lvbc1877cd7b792254f3754885cbee39d28_domain, $oq82fcaf04a48919d0bde9341212aaa544) ? 1 : 0); 
        } 
        define('LICENSE', $hcovqov4c126c264842091663620e1aa9512a4a); 

        if (! LICENSE && (filter_var(get_http_host(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) || get_http_host() == 'localhost')) { 
            return; 
        } 
        if (! $hcovqov4c126c264842091663620e1aa9512a4a && (defined('URL_BIND') && URL_BIND != 'admin')) { 
            $gchv_bad4168086fff9b4cc236ecf18eabfb0sn = ROOT_PATH . '/sn.html'; 
            if (file_exists($gchv_bad4168086fff9b4cc236ecf18eabfb0sn)) { 
                require $gchv_bad4168086fff9b4cc236ecf18eabfb0sn;
                exit(); 
            } else { 
                error('未匹配到本域名(' . $syoj8ea87449633c1f0b6bdd905b0d0a6a5d . ')有效授权码，请到PbootCMS官网获取，并填写到网站后台"全局配置>>配置参数"中。'); 
            } 
        } 
    } 
}
?>