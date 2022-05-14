namespace App\Models;

use CodeIgniter\Model;

class DuduModel extends Model {
protected $table = 'dudu';
protected $useTimestamps = true;
protected $allowedFields = ['dari', 'untuk', 'ucapan'];

public function getDudu(){

}
}