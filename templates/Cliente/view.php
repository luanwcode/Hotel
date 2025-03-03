<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente view content">
            <h3><?= h($cliente->cpf) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($cliente->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doc Pessoal') ?></th>
                    <td><?= h($cliente->doc_pessoal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cliente->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($cliente->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($cliente->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($cliente->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($cliente->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Motivo Visita') ?></th>
                    <td><?= h($cliente->motivo_visita) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Redes Socias') ?></th>
                    <td><?= h($cliente->redes_socias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profissao') ?></th>
                    <td><?= h($cliente->profissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contato') ?></h4>
                <?php if (!empty($cliente->contato)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Numero Telefone') ?></th>
                            <th><?= __('Tipo Contato') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->contato as $contato) : ?>
                        <tr>
                            <td><?= h($contato->id) ?></td>
                            <td><?= h($contato->cliente_id) ?></td>
                            <td><?= h($contato->funcionario_id) ?></td>
                            <td><?= h($contato->numero_telefone) ?></td>
                            <td><?= h($contato->tipo_contato) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contato', 'action' => 'view', $contato->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contato', 'action' => 'edit', $contato->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contato', 'action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reserva') ?></h4>
                <?php if (!empty($cliente->reserva)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Quarto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Data Reserva') ?></th>
                            <th><?= __('Data Entrada') ?></th>
                            <th><?= __('Data Saida') ?></th>
                            <th><?= __('Pessoas') ?></th>
                            <th><?= __('Criancas') ?></th>
                            <th><?= __('Status Res') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->reserva as $reserva) : ?>
                        <tr>
                            <td><?= h($reserva->id) ?></td>
                            <td><?= h($reserva->cliente_id) ?></td>
                            <td><?= h($reserva->quarto_id) ?></td>
                            <td><?= h($reserva->funcionario_id) ?></td>
                            <td><?= h($reserva->data_reserva) ?></td>
                            <td><?= h($reserva->data_entrada) ?></td>
                            <td><?= h($reserva->data_saida) ?></td>
                            <td><?= h($reserva->pessoas) ?></td>
                            <td><?= h($reserva->criancas) ?></td>
                            <td><?= h($reserva->status_res) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reserva', 'action' => 'view', $reserva->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reserva', 'action' => 'edit', $reserva->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reserva', 'action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>