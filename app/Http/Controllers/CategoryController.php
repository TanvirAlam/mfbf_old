<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var $task
     */
    private $category;

    /**
     * TaskController constructor.
     *
     * @param CategoryRepository $category
     */
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * Get all categories.
     *
     * @param Request $request
     *
     * @return \Illuminate\View
     */
    public function search(Request $request)
    {
        $categories = $this->category->search(
            $request->get('query'),
            $this->getGroupId(
                $request->get('group_name')
            )
        );
        return response()->json($categories);
    }

    /**
     * @param string $group_name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getGroupId($group_name)
    {
        return $this->category->getGroupId($group_name);
    }

    /**
     * Store a task
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        $attributes = [
            'group_id' => $this->getGroupId($request->get('group_name')),
            'name' => $request->get('name'),
        ];
        $this->category->create($attributes);
    }

    /**
     * Delete a task
     *
     * @var integer $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        $this->category->delete($id);
    }
}
