<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Models\Testimoni;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class TestimoniController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Testimoni')
            //->description('Aktifitas / Kegiatan pengguna')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('Testimoni')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Buat')
            ->description('Testimoni baru')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Testimoni);

        $grid->name('Nama Testimoni');
        $grid->file('File');
        $grid->created_at('Tanggal Pembuatan');
        $grid->disableFilter();
        $grid->disableExport();    
        $grid->disableRowSelector();
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
            //$actions->disableDelete();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    // protected function detail($id)
    // {
    //     $show = new Show(Testimoni::findOrFail($id));

    //     $show->id('Id');
    //     $show->name('Name');
    //     $show->created_at('Created at');
    //     $show->updated_at('Updated at');

    //     return $show;
    // }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Testimoni);

        $form->select('users_id', 'Pelanggan')->options(User::all()->pluck("name", "id"));
        $form->text('name', 'Nama Testimoni');
        $form->file('file', __('File Testimoni'));
        $form->text('deskripsi', 'Deskripsi Testimoni');
        $form->disableEditingCheck();

        $form->disableCreatingCheck();
    
        $form->disableViewCheck();
    
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });
        return $form;
    }
}
