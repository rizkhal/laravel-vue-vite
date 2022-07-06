<?php

namespace App\Http\Controllers\Json;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoomResource;
use App\Http\Resources\StudentResource;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Select2Controller extends Controller
{
    public function rooms(Request $request)
    {
        return RoomResource::collection(
            Room::query()
                ->when($request->get('school'), fn ($query, $school) => $query->where('id_identitas_sekolah', $school))
                ->when($request->get('q'), fn ($query, $keyword) => $query->whereLike(['kode_kelas', 'nama_kelas'], trim($keyword)))
                ->paginate($request->query('per_page', 10))
        );
    }

    public function students(Request $request)
    {
        return StudentResource::collection(
            Student::query()
                ->when($request->get('rooms'), function ($query, $room) {
                    Log::debug(__METHOD__, [
                        'ROOM' => $room,
                    ]);

                    return $query->where('id_kelas', $room);
                })
                ->when($request->get('school'), fn ($query, $school) => $query->where('id_identitas_sekolah', $school))
                ->when($request->get('q'), fn ($query, $keyword) => $query->whereLike(['nama', 'nisn'], trim($keyword)))
                ->paginate($request->query('per_page', 10))
        );
    }
}
