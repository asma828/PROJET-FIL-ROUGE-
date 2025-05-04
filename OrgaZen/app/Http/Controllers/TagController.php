<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TagInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $TagRepo;
    protected $userRepo;
    public function __construct(TagInterface $TagRepo,UserInterface $userRepo){
        $this->TagRepo=$TagRepo;
        $this->userRepo=$userRepo;

    }
    public function Tags() {
        try {
            $tags = $this->TagRepo->getAllTags();
    
            if (!$tags) {
                throw new \Exception("Aucun tag trouvé.");
            }
    
            $profile = $this->userRepo->getProfile();
    
            if (!$profile) {
                throw new \Exception("Profil utilisateur non trouvé.");
            }
    
            return view('components.admin.TagsManagement', compact('tags', 'profile'));
            
        } catch (\Exception $e) {
            return redirect()->route('components.admin.TagsManagement')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }
    
  public function destroy($id) {
    try {
        $tag = $this->TagRepo->destroy($id);
        return redirect()->back()->with('success', 'Tag deleted successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erreur lors de la suppression du tag : ' . $e->getMessage());
    }
}

public function store(Request $request) {
    try {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $this->TagRepo->store($data);
        return redirect()->back()->with('success', 'Tag ajouté avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erreur lors de l\'ajout du tag : ' . $e->getMessage());
    }
}

public function edit($id) {
    try {
        $tag = $this->TagRepo->findById($id);
        if (!$tag) {
            throw new \Exception("Tag non trouvé avec l'ID : $id");
        }
        return view('components.admin.editTagModal', compact('tag'));
    } catch (\Exception $e) {
        return redirect()->route('components.admin.TagsManagement')->with('error', 'Erreur : ' . $e->getMessage());
    }
}


public function update(Request $request, $id) {
    try {
        $data = $request->validate([
            'tagName' => 'required|string|max:255',
        ]);
        $data['name'] = $data['tagName'];

        $updatedTag = $this->TagRepo->update($id, $data);

        if (!$updatedTag) {
            throw new \Exception("Impossible de mettre à jour le tag avec l'ID : $id");
        }

        return redirect()->route('components.admin.TagsManagement')->with('success', 'Tag mis à jour avec succès.');
    } catch (\Exception $e) {
        return redirect()->route('components.admin.TagsManagement')->with('error', 'Erreur : ' . $e->getMessage());
    }
}


}
