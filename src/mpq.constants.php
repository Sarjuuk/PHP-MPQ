<?php
    const MPQ_HASH_TABLE_OFFSET     = 0;
    const MPQ_HASH_NAME_A           = 1;
    const MPQ_HASH_NAME_B           = 2;
    const MPQ_HASH_FILE_KEY         = 3;
    const MPQ_HASH_ENTRY_EMPTY      = -1;
    const MPQ_HASH_ENTRY_DELETED    = -2;
    const MPQ_HEADER_SIZE_V1        = 0x20;

    const MPQ_FLAG_FILE         = 0x80000000;
    const MPQ_FLAG_CHECKSUM     = 0x04000000;
    const MPQ_FLAG_DELETED      = 0x02000000;
    const MPQ_FLAG_SINGLEUNIT   = 0x01000000;
    const MPQ_FILE_FIX_KEY		= 0x00020000;
    const MPQ_FLAG_ENCRYPTED    = 0x00010000;
    const MPQ_FLAG_COMPRESSED   = 0x00000200;
    const MPQ_FLAG_IMPLODED     = 0x00000100;

    const MPQ_COMPRESS_DEFLATE  = 0x02;
    const MPQ_COMPRESS_BZIP2    = 0x10;

    const BLOCK_INDEX_MASK = 0xFFFFFFFF;
?>