#!/usr/bin/perl -w

use File::Copy;

binmode(STDOUT, ":utf8");
binmode(STDERR, ":utf8");
use utf8;
use strict;
use open ':encoding(utf-8)';

my @Fidel =(
	'ሀ',
	'ለ',
	'ሐ',
	'𞟠',
	'መ',
	'ሠ',
	'ረ',
	'ሰ',
	'ሸ',
	'ቀ',
	'ቐ',
	'በ',
	'ቨ',
	'ተ',
	'ቸ',
	'ኀ',
	'ነ',
	'ኘ',
	'አ',
	'ከ',
	'ኸ',
	'ወ',
	'ዐ',
	'ዘ',
	'ዠ',
	'የ',
	'ደ',
	'ዸ',
	'ጀ',
	'ገ',
	'ጘ',
	'ጠ',
	'ጨ',
	'ጰ',
	'ጸ',
	'ፀ',
	'ፈ',
	'ፐ'
);

my $baseFile = "gff_geez_mesob-layer-default.css";

for my $letter (@Fidel) {
	my $newFile = $baseFile;
	$newFile =~ s/default/$letter/;
	print "$newFile\n";
	open( OLD, "<", $baseFile ) or die $!;
	open( NEW, ">", $newFile ) or die $!;
	# copy( $baseFile, $newFile ) or die "Copy failed: $!";
	while( <OLD> ) {
		s/DEFAULT/$letter/;
		s/default/$letter-layer/;
		print NEW;
	}
	close( OLD );
	close( NEW );
}


#
# cat in this sequence:
#
# cat gff_geez_mesob-layer-numerals.css gff_geez_mesob-layer-default.css gff_geez_mesob-layer-?.css > ../gff_geez_mesob.css
