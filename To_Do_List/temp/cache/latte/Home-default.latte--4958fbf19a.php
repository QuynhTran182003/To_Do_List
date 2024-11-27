<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /Users/vinhquangtran/Documents/Work/Omnicado/To_Do_List/app/UI/Home/default.latte */
final class Template_4958fbf19a extends Latte\Runtime\Template
{
	public const Source = '/Users/vinhquangtran/Documents/Work/Omnicado/To_Do_List/app/UI/Home/default.latte';

	public const Blocks = [
		0 => ['content' => 'blockContent'],
		'snippet' => ['taskList' => 'blockTaskList'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['t' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="flexbox d-flex justify-content-center align-items-center mt-5 mb-5">
	<div class="shadow-lg rounded-60 w-50 bg-black text-white position-relative">
		<h1 class="text-center my-3 p-4">TO-DO LIST</h1>
		<div';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('taskList')), '"';
		echo '>';
		$this->renderBlock('taskList', [], null, 'snippet') /* line 5 */;
		echo '</div>

		<div class="flexbox d-flex justify-content-center position-absolute top-0 end-0 mt-4 pt-3 mx-5 px-3">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-warning rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<img src="/media/Plus.svg" alt="Plus Icon" style="width: 32px; height: 32px;" />
			</button>

			<!-- Modal -->
			<div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">New Task</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
';
		$ʟ_tmp = $this->global->uiControl->getComponent('taskForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 40 */;

		echo '						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" form="taskForm" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



';
	}


	/** n:snippet="taskList" on line 5 */
	public function blockTaskList(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('taskList', 'static') /* line 5 */;
		try {
			echo "\n";
			foreach ($task as $t) /* line 7 */ {
				echo '			<div class="task px-4 py-2 mx-5">
				<div class="d-flex align-items-center justify-content-between">
					<h4 class="taskTitle" id="taskTitle';
				echo LR\Filters::escapeHtmlAttr($t->id) /* line 9 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($t->title) /* line 9 */;
				echo '</h4>
					<div class="form-check" >
						<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('markAsDone!', [$t->id, !$t->status_task])) /* line 11 */;
				echo '">
							<btn class="btn checkBtn border border-2" id="checkBtn';
				echo LR\Filters::escapeHtmlAttr($t->id) /* line 12 */;
				echo '" style="width: 20px; height: 20px"></btn>
						</a>
					</div>
				</div>

				<h6 class="taskDescription" id="taskDescription';
				echo LR\Filters::escapeHtmlAttr($t->id) /* line 17 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($t->description) /* line 17 */;
				echo '</h6>
				<div class="taskDeadline" id="taskDeadline';
				echo LR\Filters::escapeHtmlAttr($t->id) /* line 18 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($t->deadline) /* line 18 */;
				echo '</div>
				<div class="bg-secondary my-2" style="height: 1px"></div>
			</div>
';

			}

			echo '		';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}
}
