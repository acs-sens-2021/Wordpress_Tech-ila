<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST\Functions; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Types\Type; use MailPoetVendor\Doctrine\ORM\Query\AST\Node; use MailPoetVendor\Doctrine\ORM\Query\AST\TypedExpression; use MailPoetVendor\Doctrine\ORM\Query\Lexer; use MailPoetVendor\Doctrine\ORM\Query\Parser; use MailPoetVendor\Doctrine\ORM\Query\SqlWalker; class LengthFunction extends \MailPoetVendor\Doctrine\ORM\Query\AST\Functions\FunctionNode implements \MailPoetVendor\Doctrine\ORM\Query\AST\TypedExpression { public $stringPrimary; public function getSql(\MailPoetVendor\Doctrine\ORM\Query\SqlWalker $sqlWalker) { return $sqlWalker->getConnection()->getDatabasePlatform()->getLengthExpression($sqlWalker->walkSimpleArithmeticExpression($this->stringPrimary)); } public function parse(\MailPoetVendor\Doctrine\ORM\Query\Parser $parser) { $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_IDENTIFIER); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_OPEN_PARENTHESIS); $this->stringPrimary = $parser->StringPrimary(); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_CLOSE_PARENTHESIS); } public function getReturnType() : \MailPoetVendor\Doctrine\DBAL\Types\Type { return \MailPoetVendor\Doctrine\DBAL\Types\Type::getType(\MailPoetVendor\Doctrine\DBAL\Types\Type::INTEGER); } } 