#!/usr/bin/perl
use Text::CSV;
use Data::Dumper;
use DBI;

my $database = 'myhealth';
my $hostname = 'localhost';
my $port = '3306';
my $user = 'myhealth';
my $password = 'myhealth'; 
my $dsn = "DBI:mysql:database=$database;host=$hostname;port=$port";
my $dbh = DBI->connect($dsn, $user, $password, { mysql_enable_utf8 => 1, RaiseError => 1, AutoCommit => 1 }) or die "Can't connect DB!!";

my %cond_hash;
my $cond_sql = "SELECT cond_id, conditions FROM conditions";
&get_master_ids($dbh, $cond_sql, \%cond_hash);
#print Dumper(%cond_hash);

my %bodypart_hash;
my $bodypart_sql = "SELECT bodypart_id, bodypart FROM bodyparts";
&get_master_ids($dbh, $bodypart_sql, \%bodypart_hash);
#print Dumper(%bodypart_hash);

my %position_hash;
my $pos_sql = "SELECT position_id, position FROM positions";
&get_master_ids($dbh, $pos_sql, \%position_hash);
#print Dumper(%position_hash);

my %purpose_hash;
my $purpose_sql = "SELECT purpose_id, purpose FROM purpose";
&get_master_ids($dbh, $purpose_sql, \%purpose_hash);
#print Dumper(%purpose_hash);

my %equip_hash;
my $equip_sql = "SELECT equipment_id, equipment FROM equipment";
&get_master_ids($dbh, $equip_sql, \%equip_hash);
#print Dumper(%equip_hash);


my $file = "/home/prabhu/MyHealth/MyHealth.csv";
my $csv = Text::CSV->new ({ binary => 1, eol => $/ });
open my $io, "<", $file or die "$file: $!";
my $incr = 0;
my %exer;
while (my ($row) = $csv->getline ($io)) {
	$incr++;
	print "Incr :$incr\n";
	next if($incr <= 1);
	#print Dumper($row);
	##Conditions,Position,Purpose,Equipment,Muscle,Movement Action,Body Part,Task ID,Exercise,Steps,image name,English,Hindi,Urdu,Telugu,Tamil,Bengali
	my($conditions, $position,$purpose,$equipment,$muscle,$movement, $bodypart,$taskid,$exercise,$steps,$imagename,$english,$hindi,$urdu,$telugu,$tamil,$bengali) = @{$row};
	#print "$conditions, $position,$purpose,$equipment,$muscle,$movement, $bodypart,$taskid,$exercise,$steps,$imagename,$english,$hindi,$urdu,$telugu,$tamil,$bengali\n";
	print "exercise : $exercise\n";
	my $condition_id = &find_id(\%cond_hash, $conditions);	
	my $position_id = &find_id(\%position_hash, $position);
	my $purpose_id = &find_id(\%purpose_hash, $purpose);
	my $equipment_id = &find_id(\%equip_hash, $equipment);
	my $bodypart_id = &find_id(\%bodypart_hash, $bodypart);

	if(!exists $exer{$taskid}){
		&insert_exercises($dbh, $exercise, $conditions, $condition_id, $position, $position_id, $purpose, $purpose_id, $equipment, $equipment_id, $bodypart, $bodypart_id);
		$exer{$taskid} = 1;
	}
	&insert_steps($dbh, $taskid, $steps,$imagename,$english,$hindi,$urdu,$telugu,$tamil,$bengali);
	#last if($incr == 3);	
}
close($io);

sub find_id{
    my ($data, $text) = @_;
    my $ret_id = '';
    foreach my $id(keys %{$data}){
	if($data->{$id}){
		$ret_id = $id;
		last;
	}
    }
    return $ret_id;
}

sub insert_exercises{
    my ($dbh, $exercise, $conditions, $condition_id, $position, $position_id, $purpose, $purpose_id, $equipment, $equipment_id, $bodypart, $bodypart_id) = @_;
	my $sql = "INSERT INTO exercises(exercise, description, conditions, condition_id, position, position_id, purpose, purpose_id, equipment, equipment_id, bodypart, bodypart_id) VALUES('$exercise','$exercise', '$conditions', $condition_id, '$position', $position_id, '$purpose', $purpose_id, '$equipment', $equipment_id, '$bodypart', $bodypart_id)";
	print "Exer SQL: $sql\n";
	my $sth = $dbh->prepare($sql) or die "prepare statement failed: $dbh->errstr()";
	$sth->execute() or die "execution failed: $dbh->errstr()";
	$sth->finish;
}

sub insert_steps{
	my($dbh, $exercise_id, $steps_id,$imagename,$english,$hindi,$urdu,$telugu,$tamil,$bengali) = @_;
	my $sql = "INSERT INTO exercise_steps(steps_id, exercise_id, img_loc, english,hindi,urdu,telugu,tamil,bengali) VALUES($steps_id, $exercise_id, '$imagename', '$english', '$hindi', '$urdu', '$telugu', '$tamil', '$bengali')";
	print "Steps SQL: $sql\n";
        my $sth = $dbh->prepare($sql) or die "prepare statement failed: $dbh->errstr()";
        $sth->execute() or die "execution failed: $dbh->errstr()";
        $sth->finish;

}

sub get_master_ids{
    my ($dbh, $sql, $data) = @_;
    #print "$sql\n";
    my $sth = $dbh->prepare($sql) or die "prepare statement failed: $dbh->errstr()";
    $sth->execute() or die "execution failed: $dbh->errstr()";
    #print $sth->rows . " rows found.\n";
    while (my ($id, $name) = $sth->fetchrow_array()) {
    	$data->{"$id"} = $name;
    }
    $sth->finish;
}

