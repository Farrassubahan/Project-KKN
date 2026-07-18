<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    /**
     * Display a listing of activities.
     */
    public function index()
    {
        $activities = Activity::latest()->get();
        return view('admin.activity.index', compact('activities'));
    }

    /**
     * Store a newly created activity in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tipe' => 'required|in:warga,kkn',
            'category' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $fotoName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fotoName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $fotoName);
        }

        Activity::create([
            'judul' => $request->judul,
            'tipe' => $request->tipe,
            'category' => $request->category,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoName,
        ]);

        return back()->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    /**
     * Update the specified activity in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tipe' => 'required|in:warga,kkn',
            'category' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $fotoName = $activity->foto;
        if ($request->hasFile('foto')) {
            // Delete old photo
            if ($fotoName && File::exists(public_path('activities/' . $fotoName))) {
                File::delete(public_path('activities/' . $fotoName));
            }

            $image = $request->file('foto');
            $fotoName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $fotoName);
        }

        $activity->update([
            'judul' => $request->judul,
            'tipe' => $request->tipe,
            'category' => $request->category,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoName,
        ]);

        return back()->with('success', 'Kegiatan berhasil diperbarui.');
    }

    /**
     * Remove the specified activity from storage.
     */
    public function destroy(Activity $activity)
    {
        if ($activity->foto && File::exists(public_path('activities/' . $activity->foto))) {
            File::delete(public_path('activities/' . $activity->foto));
        }

        $activity->delete();
        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    /**
     * Compress and save image using GD Library (maintaining HD quality while minimizing file size).
     */
    private function compressAndSaveImage($image, $filename)
    {
        $destinationDir = public_path('activities');
        if (!File::exists($destinationDir)) {
            File::makeDirectory($destinationDir, 0755, true);
        }

        $destinationPath = $destinationDir . '/' . $filename;
        $tempPath = $image->getRealPath();
        $extension = strtolower($image->getClientOriginalExtension());

        try {
            if ($extension === 'jpeg' || $extension === 'jpg') {
                $src = imagecreatefromjpeg($tempPath);
                imagejpeg($src, $destinationPath, 75); // Kualitas 75%
                imagedestroy($src);
            } elseif ($extension === 'png') {
                $src = imagecreatefrompng($tempPath);
                imagealphablending($src, false);
                imagesavealpha($src, true);
                imagepng($src, $destinationPath, 7); // Kompresi level 7
                imagedestroy($src);
            } elseif ($extension === 'webp') {
                $src = imagecreatefromwebp($tempPath);
                imagewebp($src, $destinationPath, 75);
                imagedestroy($src);
            } else {
                $image->move($destinationDir, $filename);
            }
        } catch (\Exception $e) {
            $image->move($destinationDir, $filename);
        }
    }
}
