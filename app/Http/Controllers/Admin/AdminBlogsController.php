<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\BlogsImages;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    /**
     * index function
     * show blogs page
     * @return view
     */
    public function index ()
    {
        $blogs = Blogs::all();
        $home = Home::first();
        return view('admin.blogs.blogs', compact(['blogs', 'home']));
    }

    /**
     * new function
     * new blog page
     * @return view
     */
    public function new ()
    {
        return view('admin.blogs.new');
    }

    /**
     * save function
     * save new blog
     * @param Request $request
     * @return redirect
     */
    public function save (Request $request)
    {
        try {
            $blog = new Blogs();
            $blog->title_ar = $request->title_ar;
            $blog->title_en = $request->title_en;
            $blog->content_ar = $request->content_ar;
            $blog->content_en = $request->content_en;
            if($request->hasFile('image')) {
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/blogs', $image_name);
                $blog->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/blogs', $image_name);
                $blog->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $blog->save();

            $images = $request->file('images');
            if($images) {
                foreach($images as $img) {
                    $image_name = time().'_'.$img->getClientOriginalName();
                    $filePath = $img->move('assets/upload/blogs_images', $image_name);
                    $blog_img = new BlogsImages();
                    $blog_img->blog_id = $blog->id;
                    $blog_img->image = time().'_'.$img->getClientOriginalName();
                    $blog_img->save();
                }
            }

            return redirect()->to('/admin/blogs')->with('blog_success', 'Blog added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/blogs')->with('blog_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * edit blog page
     * @param Request $request
     * @param integer $id
     * @return view
     */
    public function edit ($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * update function
     * update blog data
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function update (Request $request, $id)
    {
        try {
            $blog = Blogs::findOrFail($id);
            $blog->title_ar = $request->title_ar;
            $blog->title_en = $request->title_en;
            $blog->content_ar = $request->content_ar;
            $blog->content_en = $request->content_en;
            if($request->hasFile('image')) {
                $old_img = public_path('assets/upload/blogs/'.$blog->image);
                if(isset($blog->image)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/blogs', $image_name);
                $blog->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/blogs/'.$blog->background);
                if(isset($blog->background)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/blogs', $image_name);
                $blog->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $blog->save();
            return redirect()->to('/admin/blogs')->with('blog_updated', 'Blog added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/blogs')->with('blog_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete blog
     * @param integer $id
     * @return redirect
     */
    public function delete ($id)
    {
        try {
            $blog = Blogs::findOrFail($id);
            $blog_bc = public_path('assets/upload/blogs/'.$blog->background);
            $blog_iag = public_path('assets/upload/blogs/'.$blog->image);
            if(isset($blog->background)) {
                unlink($blog_bc);
            }
            if(isset($blog->image)) {
                unlink($blog_iag);
            }

            $blog_imgs = BlogsImages::where('blog_id', $id)->get();
            if($blog_imgs) {
                foreach($blog_imgs as $img) {
                    $blg_imgs = public_path('assets/upload/blogs_images/'.$img->image);
                    unlink($blg_imgs);
                    $img->delete();
                }
            }

            $blog->delete();
            return redirect()->to('/admin/blogs')->with('blogs_deleted', 'Blogs has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/blogs')->with('blogs_not_deleted', 'An unexpected error occured');
        }
    }

    /**
     * editBackground function
     * edit blogs page background
     * @param integer $id
     * @return view
     */
    public function editBackground ()
    {
        return view('admin.blogs.edit-background');
    }

    /**
     * updateBackground function
     * update blog page background
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateBackground (Request $request)
    {
        try {
            $home = Home::first();
            if($request->hasFile('background')) {
                $blog_bc = public_path('assets/upload/blogs/'.$home->blogs_bc);
                if(isset($home->blogs_bc)) {
                    unlink($blog_bc);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/blogs', $image_name);
                $home->blogs_bc = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $home->save();
            return redirect()->to('/admin/blogs')->with('bc_success', 'Blogs page background has been updated successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/blogs')->with('bc_fail', 'An unexpected error occured');
        }
    }

    /**
     * images function
     * show blog images page
     * @param integer $id
     * @return view
     */
    public function images ($id)
    {
        $images = BlogsImages::where('blog_id', $id)->get();
        return view('admin.blogs.images', compact('images'));
    }

    /**
     * addImage function
     * add new blog image
     * @param integer $id
     * @return view
     */
    public function addImage ($id)
    {
        return view('admin.blogs.add-img', compact('id'));
    }

    /**
     * saveImage function
     * save new blog image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function saveImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = new BlogsImages();
                $img->blog_id = $id;
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/blogs_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/blog/gallery/'.$id)->with('img_success', 'Image has been added successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/blog/gallery/'.$id)->with('img_fail', 'An unexpected error occured');
        }
    }

    /**
     * editImage function
     * edit blog image
     * @param integer $id
     * @return view
     */
    public function editImage ($id)
    {
        $img = BlogsImages::findOrFail($id);
        return view('admin.blogs.edit-img', compact('img'));
    }

    /**
     * updateImage function
     * update blog image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = BlogsImages::findOrFail($id);
                $old_img = public_path('assets/upload/blogs_images/'.$img->image);
                if($img->image) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/blogs_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/blog/gallery/'.$img->blog_id)->with('img_updated', 'Image has been updated successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/blog/gallery/'.$$img->blog_id)->with('img_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * deleteImage function
     * delete blog image
     * @param integer $id
     * @return redirect
     */
    public function deleteImage ($id)
    {
        try {
            $img = BlogsImages::findOrFail($id);
            $blog_img = public_path('assets/upload/blogs_images/'.$img->image);
            if(isset($img->image)) {
                unlink($blog_img);
            }

            $img->delete();
            return redirect()->to('/admin/blog/gallery/'.$img->blog_id)->with('img_deleted', 'Image has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/blog/'.$img->blog_id)->with('img_not_deleted', 'An unexpected error occured');
        }
    }

}
