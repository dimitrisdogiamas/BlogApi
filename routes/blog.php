use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [BlogController::class, 'index']);
Route::post('/posts', [BlogController::class, 'store']);