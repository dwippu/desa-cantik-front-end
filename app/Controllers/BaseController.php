<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Cookie\Cookie;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
    
    /**
     * Ketika pengguna mengakses langsung ke arah root atau url tertentu yang tidak memiliki kode desa,
     * dan user tersebut dalam 12 jam tidak mengakses laman desa tertentu
     * maka user tersebut akan diarahkan pada desa $y
     */
    protected function cekCookie (String $link){
        helper('cookie');
        $y = '/3201010003';
        if (! get_cookie('x')){
            return redirect()->to($y.$link);
        }
        return redirect()->to(get_cookie('x').$link);
    }

     /**
     * Fungsi ini digunakan untuk mengatur cookie sebagai riwayat desa terakhir yang dibuka
     * 
     * @retrurn void
     */
    protected function aturCookieDesa($kode_desa){
        helper(['cookie', 'desa', 'response']);
        
        $cookie = new Cookie(
            'x',
            $kode_desa,
            [
                'max-age' => 3600 * 12, // Expires in 2 hours
            ]
        );
        set_cookie($cookie);
    }
}
