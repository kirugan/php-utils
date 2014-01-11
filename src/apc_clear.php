<?php
/**
 * Clear cache from apc
 */
function apc_clear_cache_all(){
    apc_clear_cache();
    apc_clear_cache('user');
    apc_clear_cache('opcode');
}