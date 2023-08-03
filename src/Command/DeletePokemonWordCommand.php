<?php

namespace App\Command;

use App\Repository\CommentRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:delete-pokemon-word',
    description: 'Delete pokemon word',
)]
class DeletePokemonCommand extends Command
{

    public function __construct(private  CommentRepository $commentRepository)
    {
        parent::__construct();
    }

    protected function configure(): void
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output ): int
    {

        $this->commentRepository->deleteWord();

        $output->writeln("done");


        return Command::SUCCESS;
    }
}