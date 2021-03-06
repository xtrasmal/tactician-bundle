<?php namespace League\Tactician\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use League\Tactician\Bundle\DependencyInjection\CommandHandlerCompilerPass;
use League\Tactician\Bundle\DependencyInjection\TacticianExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TacticianBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new CommandHandlerCompilerPass());
    }

    public function getContainerExtension()
    {
        return new TacticianExtension();
    }
}
