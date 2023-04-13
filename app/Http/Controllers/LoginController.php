<?php
/**
 * ファイルのタイトル
 *
 * ファイルの説明.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage テーマ名
 * @author     名前 <foo.bar@example.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://example.com
 * @since      1.0.0
 */

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService();
    }

    public function index()
    {
        $url = 'https://api.example.com/data';

        $data = [
            'title' => 'Sample Title',
            'description' => 'Sample Description',
        ];

        $result = $this->apiService->getApiData($data);

        $result = $this->apiService->sendApiData($data);

        $result = $this->apiService->sendApiRequest("POST", $url, $data);
    }
}
