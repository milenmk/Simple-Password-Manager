<?php

namespace PhpParser\Parser;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{

	public const YYERRTOK = 256;
	public const T_THROW  = 257;
	public const T_INCLUDE = 258;
	public const T_INCLUDE_ONCE = 259;
	public const T_EVAL         = 260;
	public const T_REQUIRE = 261;
	public const T_REQUIRE_ONCE = 262;
	public const T_LOGICAL_OR   = 263;
	public const T_LOGICAL_XOR = 264;
	public const T_LOGICAL_AND = 265;
	public const T_PRINT       = 266;
	public const T_YIELD = 267;
	public const T_DOUBLE_ARROW = 268;
	public const T_YIELD_FROM   = 269;
	public const T_PLUS_EQUAL = 270;
	public const T_MINUS_EQUAL = 271;
	public const T_MUL_EQUAL   = 272;
	public const T_DIV_EQUAL = 273;
	public const T_CONCAT_EQUAL = 274;
	public const T_MOD_EQUAL    = 275;
	public const T_AND_EQUAL = 276;
	public const T_OR_EQUAL  = 277;
	public const T_XOR_EQUAL = 278;
	public const T_SL_EQUAL  = 279;
	public const T_SR_EQUAL = 280;
	public const T_POW_EQUAL = 281;
	public const T_COALESCE_EQUAL = 282;
	public const T_COALESCE       = 283;
	public const T_BOOLEAN_OR = 284;
	public const T_BOOLEAN_AND = 285;
	public const T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG = 286;
	public const T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG     = 287;
	public const T_IS_EQUAL                            = 288;
	public const T_IS_NOT_EQUAL                 = 289;
	public const T_IS_IDENTICAL = 290;
	public const T_IS_NOT_IDENTICAL = 291;
	public const T_SPACESHIP        = 292;
	public const T_IS_SMALLER_OR_EQUAL = 293;
	public const T_IS_GREATER_OR_EQUAL = 294;
	public const T_SL                  = 295;
	public const T_SR           = 296;
	public const T_INSTANCEOF = 297;
	public const T_INC        = 298;
	public const T_DEC = 299;
	public const T_INT_CAST = 300;
	public const T_DOUBLE_CAST = 301;
	public const T_STRING_CAST = 302;
	public const T_ARRAY_CAST  = 303;
	public const T_OBJECT_CAST = 304;
	public const T_BOOL_CAST   = 305;
	public const T_UNSET_CAST = 306;
	public const T_POW        = 307;
	public const T_NEW = 308;
	public const T_CLONE = 309;
	public const T_EXIT  = 310;
	public const T_IF   = 311;
	public const T_ELSEIF = 312;
	public const T_ELSE   = 313;
	public const T_ENDIF = 314;
	public const T_LNUMBER = 315;
	public const T_DNUMBER = 316;
	public const T_STRING  = 317;
	public const T_STRING_VARNAME = 318;
	public const T_VARIABLE       = 319;
	public const T_NUM_STRING = 320;
	public const T_INLINE_HTML = 321;
	public const T_ENCAPSED_AND_WHITESPACE = 322;
	public const T_CONSTANT_ENCAPSED_STRING = 323;
	public const T_ECHO                     = 324;
	public const T_DO                = 325;
	public const T_WHILE = 326;
	public const T_ENDWHILE = 327;
	public const T_FOR      = 328;
	public const T_ENDFOR = 329;
	public const T_FOREACH = 330;
	public const T_ENDFOREACH = 331;
	public const T_DECLARE    = 332;
	public const T_ENDDECLARE = 333;
	public const T_AS         = 334;
	public const T_SWITCH = 335;
	public const T_MATCH  = 336;
	public const T_ENDSWITCH = 337;
	public const T_CASE      = 338;
	public const T_DEFAULT = 339;
	public const T_BREAK   = 340;
	public const T_CONTINUE = 341;
	public const T_GOTO     = 342;
	public const T_FUNCTION = 343;
	public const T_FN       = 344;
	public const T_CONST = 345;
	public const T_RETURN = 346;
	public const T_TRY    = 347;
	public const T_CATCH = 348;
	public const T_FINALLY = 349;
	public const T_USE     = 350;
	public const T_INSTEADOF = 351;
	public const T_GLOBAL    = 352;
	public const T_STATIC = 353;
	public const T_ABSTRACT = 354;
	public const T_FINAL    = 355;
	public const T_PRIVATE = 356;
	public const T_PROTECTED = 357;
	public const T_PUBLIC    = 358;
	public const T_READONLY = 359;
	public const T_VAR      = 360;
	public const T_UNSET = 361;
	public const T_ISSET = 362;
	public const T_EMPTY = 363;
	public const T_HALT_COMPILER = 364;
	public const T_CLASS         = 365;
	public const T_TRAIT  = 366;
	public const T_INTERFACE = 367;
	public const T_ENUM      = 368;
	public const T_EXTENDS = 369;
	public const T_IMPLEMENTS = 370;
	public const T_OBJECT_OPERATOR = 371;
	public const T_NULLSAFE_OBJECT_OPERATOR = 372;
	public const T_LIST                     = 373;
	public const T_ARRAY             = 374;
	public const T_CALLABLE = 375;
	public const T_CLASS_C  = 376;
	public const T_TRAIT_C = 377;
	public const T_METHOD_C = 378;
	public const T_FUNC_C   = 379;
	public const T_LINE   = 380;
	public const T_FILE = 381;
	public const T_START_HEREDOC = 382;
	public const T_END_HEREDOC   = 383;
	public const T_DOLLAR_OPEN_CURLY_BRACES = 384;
	public const T_CURLY_OPEN               = 385;
	public const T_PAAMAYIM_NEKUDOTAYIM = 386;
	public const T_NAMESPACE            = 387;
	public const T_NS_C          = 388;
	public const T_DIR  = 389;
	public const T_NS_SEPARATOR = 390;
	public const T_ELLIPSIS     = 391;
	public const T_NAME_FULLY_QUALIFIED = 392;
	public const T_NAME_QUALIFIED       = 393;
	public const T_NAME_RELATIVE  = 394;
	public const T_ATTRIBUTE     = 395;
}
