<?php
namespace App\UI\Home;

use Nette;
use Nette\Application\UI\Form;

final class HomePresenter extends Nette\Application\UI\Presenter
{
    private $database;

    public function __construct(Nette\Database\Explorer $database) {
        $this->database = $database;
    }

    // RENDER ALL UNFINISHED TASKS
    public function renderDefault(): void
    {
        $this->template->task = $this->database
            ->table('task')
            ->where('status_task', 0);
    }

    //  MODAL FOR NEW TASK ADDITION
    protected function createComponentTaskForm(): Form
    {
        $form = new Form;
        $form->addText('title', 'Title')
            ->setRequired()
            ->setHtmlAttribute('class', 'form-control mb-3 mt-1 mx-2');
        $form->addTextArea('description', 'Description')
            ->setHtmlAttribute('class', 'form-control mb-3 mt-1 mx-2');
        $form->addDateTime('deadline', 'Deadline')
            ->setDefaultValue((new \DateTime())->format('Y-m-d\TH:i'))
            ->setHtmlAttribute('class', 'form-control mb-3 mt-1 mx-2');


        // set id of this form to 'taskForm'
        $form->setHtmlAttribute('id', 'taskForm');
        $form->onSuccess[] = [$this, 'taskFormSucceeded'];

        return $form;
    }

    public function taskFormSucceeded(Form $form, $data): void
    {
        $post = $this->database
            ->table('task')
            ->insert($data);

        $this->flashMessage('New task was added', 'success');
        $this->redirect('Home:default');
    }

    // HANDLE THE CHECK BUTTON
    public function handleMarkAsDone(int $taskId, bool $done): void
    {
        sleep(5);
        $this->database->table('task')
            ->where('id', $taskId)
            ->update(['status_task' => $done]);

        $this->redrawControl('taskList');
    }
}
