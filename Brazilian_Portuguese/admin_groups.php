<?php

// Language definitions used in admin-groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'Você deve fornecer um título de grupo.',
'Title already exists message'	=>	'Já existe um grupo com o título <strong>%s</strong>.',
'Default group redirect'		=>	'Grupo padrão definido. Redirecionando …',
'Cannot remove default message'	=>	'O grupo padrão não pode ser removido. Para poder excluir este grupo você precisa primeiro definir um outro grupo como padrão.',
'Group removed redirect'		=>	'Grupo removido. Redirecionando …',
'Group added redirect'			=>	'Grupo adicionado. Redirecionando …',
'Group edited redirect'			=>	'Grupo editado. Redirecionando …',

'Add groups head'				=>	'Adicionar/configurar grupos',
'Add group subhead'				=>	'Adicionar novo grupo',
'New group label'				=>	'Basear novo grupo em',
'New group help'				=>	'Selecione um grupo de usuários do qual o novo grupo herdará configurações de permissões. A próxima página lhe permitirá ajustar as configurações herdadas.',
'Default group subhead'			=>	'Definir grupo padrão',
'Default group label'			=>	'Grupo padrão',
'Default group help'			=>	'Este é o grupo de usuários padrão, ex. o grupo em que os usuários são colocados ao se registrarem. Por razões de segurança, usuários não podem ser colocados nos grupos de Moderadores e administradores por padrão.',
'Existing groups head'			=>	'Grupos existentes',
'Edit groups subhead'			=>	'Editar/excluir grupos',
'Edit groups info'				=>	'Os grupos pré-definidos Visitantes, Administradores, Moderadores e Membros não podem ser removidos. Contudo, eles podem ser editados. Por favor, note que algumas opções não estão disponíveis em alguns grupos (ex. a permissão <em>editar mensagens</em> para visitantes). Administradores sempre possuem permissões totais.',
'Edit link'						=>	'Editar',
'Delete link'					=>	'Excluir',
'Group delete head'				=>	'Exclusão de grupo',
'Confirm delete subhead'		=>	'Confirmar exclusão do grupo',
'Confirm delete info'			=>	'Tem certeza que deseja excluir o grupo <strong>%s</strong>?',
'Confirm delete warn'			=>	'AVISO! Não é possível restaurar o grupo após sua exclusão.',
'Delete group head'				=>	'Excluir grupo',
'Move users subhead'			=>	'Mover usuários atualmente no grupo',
'Move users info'				=>	'O grupo <strong>%s</strong> possui atualmente <strong>%s</strong> membros. Por favor, selecione um grupo para o qual estes usuários deverão ser movidos durante a exclusão.',
'Move users label'				=>	'Mover usuários para',
'Delete group'					=>	'Excluir grupo',

'Group settings head'			=>	'Configurações de grupo',
'Group settings subhead'		=>	'Definir opções e permissões do grupo',
'Group settings info'			=>	'As opções e permissões abaixo são as permissões padrão para o grupo de usuários. Estas opções se aplicam caso nenhuma permissão específica do fórum esteja em efeito.',
'Group title label'				=>	'Título do grupo',
'User title label'				=>	'Título do usuário',
'User title help'				=>	'Este título irá sobrescrever quaisquer classes que os usuários deste grupo tenham conquistado. Deixe em branco para usar a classe ou título padrão.',
'Mod privileges label'			=>	'Dar privilégios de moderação aos usuários',
'Mod privileges help'			=>	'Para que um usuário deste grupo possa ter habilidades de moderação, ele deve ser designado como moderador de um ou mais fóruns. Isto é feito através da página de administração de usuário do perfil do usuário.',
'Edit profile label'			=>	'Permitir que moderadores editem perfis dos usuários',
'Edit profile help'				=>	'Se privilégios de moderador estiverem ativos, permita que usuários neste grupo editem perfis de usuários.',
'Rename users label'			=>	'Permitir que moderadores renomeiem usuários',
'Rename users help'				=>	'Se privilégios de moderador estiverem ativos, permita que usuários deste grupo renomeiem usuários.',
'Change passwords label'		=>	'Permitir que moderadores alterem senhas',
'Change passwords help'			=>	'Se privilégios de moderador estiverem ativos, permita que usuários deste grupo alterem senhas dos usuários.',
'Ban users label'				=>	'Permitir moderadores banir usuários',
'Ban users help'				=>	'Se privilégios de moderador estiverem ativos, permitir usuários deste grupo banir outros usuários.',
'Read board label'				=>	'Ler site',
'Read board help'				=>	'Permitir que usuários deste grupo vejam o site. Esta configuração se aplica a todos os aspectos do site e portanto não podem ser sobrescritas por configurações específicas de fóruns. Caso definido como "Não", usuários deste grupo apenas conseguirão se registrar e autenticar no site.',
'View user info label'			=>	'Visualizar informações de usuário',
'View user info help'			=>	'Permitir que usuários visualizar a lista e perfis de usuários.',
'Post replies label'			=>	'Responder',
'Post replies help'				=>	'Permitir que usuários deste grupo respondam os tópicos.',
'Post topics label'				=>	'Criar tópicos',
'Post topics help'				=>	'Permitir que usuários deste grupo criem novos tópicos.',
'Edit posts label'				=>	'Editar mensagens',
'Edit posts help'				=>	'Permitir que usuários deste grupo editem suas próprias mensagens.',
'Delete posts label'			=>	'Excluir mensagens',
'Delete posts help'				=>	'Permitir que usuários deste grupo excluam suas próprias mensagens.',
'Delete topics label'			=>	'Excluir tópicos',
'Delete topics help'			=>	'Permitir que usuários deste grupo excluam seus próprios tópicos (incluindo as mensagens do tópico).',
'Set own title label'			=>	'Definir o próprio título de usuário',
'Set own title help'			=>	'Permitir que usuários deste grupo definam seu próprio título de usuário.',
'User search label'				=>	'Usar a pesquisa',
'User search help'				=>	'Permitir que usuários deste grupo utilizem a função de pesquisa.',
'User list search label'		=>	'Pesquisar lista de usuários',
'User list search help'			=>	'Permitir que usuários deste grupo pesquisem por usuários na lista de usuários.',
'Send e-mails label'			=>	'Enviar emails',
'Send e-mails help'				=>	'Permitir que usuários deste grupo enviem emails para outros usuários.',
'Post flood label'				=>	'Intervalo de excesso de mensagens',
'Post flood help'				=>	'Número de segundos que os usuários deste grupo precisam esperar entre mensagens. Use 0 para desabilitar.',
'Search flood label'			=>	'Intervalo de excesso de pesquisas',
'Search flood help'				=>	'Número de segundos que os usuários deste grupo precisam esperar entre pesquisas. Use 0 para desabilitar.',
'E-mail flood label'			=>	'Intervalo de excesso de emails',
'E-mail flood help'				=>	'Número de segundos que os usuários deste grupo precisam esperar entre emails. Use 0 para desabilitar.',
'Moderator info'				=>	'Por favor, note que para que um usuário deste grupo tenha habilidade de moderação, ele deve ser designado como moderador de um ou mais fóruns. Isto é feito através da página de administração de usuário do perfil do usuário.',

);
